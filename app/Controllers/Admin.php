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

public function crear()
{

    
    $productoModel = new ProductosModel();
    $categoriaModel = new CategoriaModel();

    // Validar cuotas permitidas
    $cuotasValidas = [0, 3, 6];
    $cuotas = (int) $this->request->getPost('cuotas');

    // Validar nombre
    $nombre = trim($this->request->getPost('nombre'));
    if (!$nombre || strlen($nombre) > 100) {
        return redirect()->back()->withInput()->with('error', 'El nombre es obligatorio y debe tener como máximo 100 caracteres.');
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


}


