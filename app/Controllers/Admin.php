<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\DetalleFacturaModel;
use App\Models\ProductosModel;
use App\Models\FacturaModel;
use App\Models\UsuarioModel;


class Admin extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Principal';
        return view('pages/admin_principal', $data);
    }

    public function productos()
    {
        
        $productoModel = new ProductosModel();
        $resultado = $productoModel->obtenerProductosConEquipo();
        $data['titulo'] = 'Productos';
        $data['lista_productos'] = $resultado;

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

public function pedido($idFactura)
{
    $facturaModel = new FacturaModel();
    $detalleModel = new DetalleFacturaModel();
    $usuarioModel = new UsuarioModel();
    $productoModel = new ProductosModel(); // seguridad

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


}


