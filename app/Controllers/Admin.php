<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\DetalleFacturaModel;
use App\Models\ProductosModel;
use App\Models\FacturaModel;
use App\Models\UsuarioModel;
use App\Models\CategoriaModel;
use App\Models\ConsultaModel;
use App\Models\ContactoModel;
use App\Models\ItemCarritoModel;
use Config\Database;

class Admin extends BaseController
{
    public function index(): string
    {
        $productoModel = new ProductosModel();
        $usuarioModel = new UsuarioModel();
        $facturaModel = new FacturaModel();
        $consultaModel = new ConsultaModel();
        $contactoModel = new ContactoModel();
        $carritoModel = new ItemCarritoModel();
        
        $data = [
        'titulo' => 'Principal',
        'usuarios' => $usuarioModel->countAll(),
        'productos' => $productoModel->countAll(),
        'stockBajo' => $productoModel->where('stock >', 0)->where('stock <', 10)->countAllResults(),
        'sinStock' => $productoModel->where('stock', 0)->countAllResults(),
        'consultasSinResponder' => $consultaModel->where('activo', 1)->countAllResults() + $contactoModel->where('activo', 1)->countAllResults(),
        'carritosAbandonados' => $carritoModel->countAll()
    ];
        return view('pages/admin_principal', $data);
    }

    public function productos()
    {
        $categoriasModel = new CategoriaModel();
        $productoModel = new ProductosModel();
        $productoModel->desactivarProductosSinStock();
        $resultado = $productoModel->obtenerProductosConEquipo();
        $data['titulo'] = 'Productos';
        $data['lista_productos'] = $resultado;
        $data['categorias'] = $categoriasModel->findAll();

        return view('pages/admin_productos', $data);
    }

    public function listarFacturas()
{
    $facturaModel = new FacturaModel();

    $facturas = $facturaModel
        ->select('factura.id_factura, factura.fecha, usuario.nombre, usuario.apellido, usuario.email')
        ->join('usuario', 'usuario.id_usuario = factura.id_usuario')
        ->where('factura.activo', 1)
        ->orderBy('factura.fecha', 'DESC')
        ->findAll();
    $data['titulo'] = 'Pedidos';
    $data['facturas'] = $facturas;
    return view('pages/pedidos', $data);
}

public function pedidos($id)
{   
    $idFactura = $id;
    $facturaModel = new FacturaModel();
    $detalleModel = new DetalleFacturaModel();
    $usuarioModel = new UsuarioModel();
    $productoModel = new ProductosModel(); 

    $factura = $facturaModel->find($idFactura);
    if (!$factura) {
        return redirect()->back()->with('error', 'Factura no encontrada.');
    }

    $usuario = $usuarioModel->find($factura['id_usuario']);
    if (!$usuario) {
        return redirect()->back()->with('error', 'Usuario no encontrado.');
    }

    $detalles = $detalleModel->where('id_factura', $idFactura)->findAll();

    foreach ($detalles as &$detalle) {
        $producto = $productoModel->find($detalle['id_producto']);
        $detalle['producto_nombre'] = $producto ? $producto['nombre'] : 'Producto eliminado';
    }

    $data = [
        'titulo' => 'Pedidos',
        'factura' => $factura,
        'usuario' => $usuario,
        'detalles' => $detalles
    ];
    
    return view('pages/factura_detalle', $data);
}

public function crear() {
    
        $productoModel = new ProductosModel();
        $categoriaModel = new CategoriaModel();

        // Validar cuotas permitidas
        $cuotasValidas = [0, 3, 6];
        $cuotas = (int) $this->request->getPost('cuotas');

        // Validar nombre
        $nombre = trim($this->request->getPost('nombre'));
        $existe = $productoModel->where('nombre', $nombre)->first();
        if (!$nombre || strlen($nombre) > 100 || $existe) {
            return redirect()->back()->withInput()->with('error', 'Nombre inválido o ya existe un producto con ese nombre.');
        }

        // Validar cuotas
        if (!in_array($cuotas, $cuotasValidas)) {
            return redirect()->back()->withInput()->with('error', 'Las cuotas deben ser 0, 3 o 6.');
        }

        // Validar precio
        $precio = (float) $this->request->getPost('precio');
        if ($precio <= 0) {
            return redirect()->back()->withInput()->with('error', 'El precio debe ser mayor a 0.');
        }

        // Validar stock
        $stock = (int) $this->request->getPost('stock');
        if ($stock < 1) {
            return redirect()->back()->withInput()->with('error', 'El stock debe ser al menos 1.');
        }

        // Procesar jugador relevante (puede ser null)
        $jugador = $this->request->getPost('jugador_relevante') ?: null;

        // Verificar si se agregó una nueva categoría
        $idCategoria = $this->request->getPost('id_categoria');
        if ($idCategoria === 'nueva') {
            $nuevaCategoria = trim($this->request->getPost('nueva_categoria'));
            if (!$nuevaCategoria) {
                return redirect()->back()->withInput()->with('error', 'Debe ingresar un nombre para la nueva categoría.');
            }

            // Revisar si ya existe la categoría
            $categoriaExistente = $categoriaModel->where('equipo', $nuevaCategoria)->first();
            if ($categoriaExistente) {
                $idCategoria = $categoriaExistente['id_categoria'];
            } else {
                $idCategoria = $categoriaModel->insert([
                    'equipo' => $nuevaCategoria,
                ], true); // true para obtener el ID insertado
            }
        }

        // Procesar imagen
        $imagen = $this->request->getFile('ruta_imagen');
        $rutaImagen = null;

        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            $nombreImagen = $imagen->getRandomName();
            $imagen->move(FCPATH . 'public/assets/img/', $nombreImagen);  // guarda en public/assets/img/
            $rutaImagen = 'public/assets/img/' . $nombreImagen;            // ruta relativa para usar en la web
        }

        // Preparar datos
        $data = [
            'nombre'            => $nombre,
            'jugador_relevante' => $jugador,
            'id_categoria'      => $idCategoria,
            'cuotas'            => $cuotas,
            'precio'            => $precio,
            'stock'             => $stock,
        ];

        if ($rutaImagen) {
            $data['ruta_imagen'] = $rutaImagen;
        }

        // Insertar
        $productoModel->insert($data);

        return redirect()->to('/productos')->with('mensaje', 'Producto añadido correctamente.');
    }
    public function verEliminados() {
        $productoModel = new ProductosModel();
        $categoriaModel = new CategoriaModel();

        // Obtener productos inactivos (activo = 0) y su categoría (equipo)
        $productosInactivos = $productoModel
            ->select('productos.*, categoria.equipo')
            ->join('categoria', 'categoria.id_categoria = productos.id_categoria')
            ->where('productos.activo', 0)
            ->findAll();

        // Obtener todas las categorías (activas o no, según tu lógica)
        $categorias = $categoriaModel->findAll();

        $data = [
            'titulo' => 'Productos Eliminados',
            'lista_productos' => $productosInactivos,
            'categorias' => $categorias
        ];

        return view('pages/admin_producto_eliminado', $data);
    }
    public function activar($id){
        $productoModel = new ProductosModel();
        $producto = $productoModel->find($id);

        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        if ($producto['stock'] <= 0) {
            return redirect()->back()->with('error', 'No se puede activar un producto con stock 0.');
        }

        // Activar el producto
        $productoModel->update($id, ['activo' => 1]);

        return redirect()->back()->with('success', 'Producto activado correctamente.');
    }

    public function eliminar($id){
        $productoModel = new ProductosModel();
        $producto = $productoModel->find($id);

        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        // Activar el producto
        $productoModel->update($id, ['activo' => 0]);

        return redirect()->back()->with('success', 'Producto elimindado correctamente.');
    }

    public function usuariosRegistrados(){
        $usuarioModel = new UsuarioModel();
       $usuarios = $usuarioModel->findAll();

        if (!$usuarios) {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }

        $data['titulo'] = 'Lista de Usuarios';
        $data['usuarios'] = $usuarios;

        return view('pages/admin_usuarios', $data);
    }

    public function createAdmin()
    {
        $rules = [
            
            'nombre' => 'required|max_length[100]',
            'apellido' => 'required|max_length[100]',
            'email' => 'required|max_length[80]|is_unique[usuario.email]',
            'password' => 'required|max_length[50]|min_length[8]',
            'repassword' => 'matches[password]'
        ];
        
        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $userModel = new UsuarioModel();
        $post = $this->request->getPost(['nombre', 'apellido', 'email', 'password']);

        $token = bin2hex(random_bytes(20));

        $userModel->insert([
            'nombre' => $post['nombre'],
            'apellido' => $post['apellido'],
            'email' => $post['email'],
            'contraseña' => password_hash($post['password'], PASSWORD_DEFAULT),
            'rol' => "admin",
            
        ]);
        return redirect()->to(site_url('usuarios'))->with('success', 'Administrador creado exitosamente.');
    }

    public function editar($id_producto)
    {
        $productoModel = new \App\Models\ProductosModel();
        $categoriaModel = new \App\Models\CategoriaModel();

        $producto = $productoModel->find($id_producto);
        $categorias = $categoriaModel->findAll();

        if (!$producto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Producto no encontrado");
        }

        return view('pages/editar', [
            'titulo' => 'Editar Producto',
            'producto' => $producto,
            'categorias' => $categorias
        ]);
    }


    public function actualizar($id_producto)
    {
        $productoModel = new ProductosModel();

        $producto = $productoModel->find($id_producto);

        if (!$producto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Producto no encontrado");
        }

        $data = $this->request->getPost();

        if (!empty($data['precio_descuento']) && $data['precio_descuento'] >= $data['precio']) {
        return redirect()->back()->withInput()->with('error', 'El precio de descuento no puede ser mayor o igual al precio original.');
    }

        $imagen = $this->request->getFile('ruta_imagen');
        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) {
            $nombreImagen = $imagen->getRandomName();
            $imagen->move('uploads/', $nombreImagen);
            $data['ruta_imagen'] = 'uploads/' . $nombreImagen;
        }

        $productoModel->update($id_producto, $data);

        return redirect()->to(site_url('productos'))->with('mensaje', 'Producto actualizado correctamente');
    }

    public function consultas(){
        $db = Database::connect();
        $consultaModel = new ConsultaModel();
        $contactoModel = new ContactoModel();

        $consultas = $consultaModel->consultaConUsuario();
        $contactos = $contactoModel->where('activo', 1)->findAll();

        $data = [
        'titulo' => 'Consultas',
        'consultas' => $consultas,
        'contactos' => $contactos
        ];
        // Enviar datos a la vista
        return view('pages/admin_consultas', $data);
    }

    public function marcarLeido($tipo, $id){
    if ($tipo === 'consulta') {
        $model = new ConsultaModel();
        $success = $model->update($id, ['activo' => 0]);
    } elseif ($tipo === 'contacto') {
        $model = new ContactoModel();
        $success = $model->update($id, ['activo' => 0]); // o update si tenés campo `activo`
    } 

    return redirect()->to(site_url('consultas'));
    }

    public function desactivarUsuario($id){
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($id);

        if(!$usuario){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Usuario no encontrado");
        }

        if($usuario['activo'] == 1){
            $usuarioModel->update($id, ['activo' => 0]);
            return redirect()->to(site_url('usuarios'))->with('success', 'Usuario desactivado.');
        } else if($usuario['activo'] == 0){
            $usuarioModel->update($id, ['activo' => 1]);
            return redirect()->to(site_url('usuarios'))->with('success', 'Usuario activado.');
        }
    }

}


