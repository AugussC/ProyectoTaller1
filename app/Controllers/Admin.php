<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\DetalleFacturaModel;
use App\Models\ProductosModel;
use App\Models\FacturaModel;
use App\Models\UsuarioModel;
use App\Models\CategoriaModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Principal';
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

}


