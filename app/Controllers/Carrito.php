<?php

namespace App\Controllers;

use App\Models\ProductosModel;
use App\Models\ItemCarritoModel;
use App\Models\FacturaModel;
use App\Models\DetalleFacturaModel;
class Carrito extends BaseController
{
    public function agregarCarrito($id_producto)
    {
        $session = session();

        $id_usuario = $session->get('userid');

        $productoModel = new ProductosModel();
        $producto = $productoModel->find($id_producto);

        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        $itemCarritoModel = new ItemCarritoModel();

        // Verificamos si ya existe ese producto en el carrito del usuario
        $itemExistente = $itemCarritoModel
            ->where('id_usuario', $id_usuario)
            ->where('id_producto', $id_producto)
            ->first();

        if ($itemExistente) {
            // Si existe, solo actualizamos la cantidad
            $itemExistente['cantidad'] += 1;
            $itemCarritoModel->update($itemExistente['id_detalle_carrito'], $itemExistente);
        } else {
            // Si no existe, lo insertamos
            $itemCarritoModel->insert([
                'id_usuario' => $id_usuario,
                'id_producto' => $id_producto,
                'cantidad' => 1
            ]);
        }

        return redirect()->back()->with('mensaje', 'Producto agregado al carrito.');
    }

    public function ver(){
        $session = session();
        $id_usuario = $session->get('userid');

        if (!$id_usuario) {
            return redirect()->to(base_url('login'))->with('error', 'Iniciá sesión para ver tu carrito.');
        }

        $itemCarritoModel = new ItemCarritoModel();
        $productoModel = new ProductosModel();
        $usuarioModel = new \App\Models\UsuarioModel();

        $items = $itemCarritoModel->where('id_usuario', $id_usuario)->findAll();

        $carrito = [];
        foreach ($items as $item) {
            $producto = $productoModel->find($item['id_producto']);
            if ($producto) {
                $precioFinal = (isset($producto['precio_descuento']) && $producto['precio_descuento'] > 0)
                    ? $producto['precio_descuento']
                    : $producto['precio'];

                $carrito[] = [
                    'id_producto' => $producto['id_producto'],
                    'nombre' => $producto['nombre'],
                    'precio' => $precioFinal,
                    'cantidad' => $item['cantidad'],
                    'subtotal' => $precioFinal * $item['cantidad']
                ];
            }
        }

        $usuario = $usuarioModel->find($id_usuario);
        $direccion = $usuario ? $usuario['direccion'] : null;

        $data = [
            'titulo' => 'Carrito',
            'carrito' => $carrito,
            'direccionUsuario' => $direccion
        ];

        return view('pages/carrito', $data);
    }

    public function eliminar($id_producto)
    {
        $session = session();
        $id_usuario = $session->get('userid');

        $itemCarritoModel = new ItemCarritoModel();

        $itemCarritoModel
            ->where('id_usuario', $id_usuario)
            ->where('id_producto', $id_producto)
            ->delete();

        return redirect()->to(base_url('carrito'))->with('mensaje', 'Producto eliminado del carrito.');
    }

   public function actualizar($id_producto, $accion)
{
    $session = session();
    $id_usuario = $session->get('userid');

    $itemCarritoModel = new ItemCarritoModel();
    $productoModel = new ProductosModel();

    // Buscar el ítem del carrito
    $item = $itemCarritoModel
        ->where('id_usuario', $id_usuario)
        ->where('id_producto', $id_producto)
        ->first();

    if (!$item) {
        return redirect()->to(base_url('carrito'))->with('error', 'Producto no encontrado en el carrito.');
    }

    // Obtener stock actual del producto
    $producto = $productoModel->find($id_producto);
    if (!$producto) {
        return redirect()->to(base_url('carrito'))->with('error', 'Producto no encontrado en la base de datos.');
    }

    $stockDisponible = $producto['stock'];

    // Acción: sumar o restar
    if ($accion === 'sumar') {
        if ($item['cantidad'] < $stockDisponible) {
            $item['cantidad'] += 1;
            $itemCarritoModel->update($item['id_detalle_carrito'], $item);
        } else {
            return redirect()->to(base_url('carrito'))->with('error', 'No hay más stock disponible para este producto.');
        }
    } elseif ($accion === 'restar') {
        
        if ($item['cantidad'] > 1) {
            $item['cantidad'] -= 1;
            $itemCarritoModel->update($item['id_detalle_carrito'], $item);
        } else {
            return redirect()->to(base_url('carrito'))->with('error', 'La cantidad mínima es 1.');
        }
    }

    return redirect()->to(base_url('carrito'))->with('mensaje', 'Carrito actualizado.');
}

    public function finalizarCompra(){
        $session = session();
        $idUsuario = $session->get('userid');

        // Obtener carrito desde la base de datos
        $carritoModel = new ItemCarritoModel();
        $carrito = $carritoModel->where('id_usuario', $idUsuario)->findAll();

        if (empty($carrito)) {
            return redirect()->back()->with('error', 'El carrito está vacío.');
        }

        // Modelos necesarios
        $productoModel = new ProductosModel();
        $facturaModel = new FacturaModel();
        $detalleModel = new DetalleFacturaModel();

        // Calcular total
        $total = 0;
        foreach ($carrito as $item) {
            $producto = $productoModel->find($item['id_producto']);

            if (!$producto) {
                continue;
            }

            $precioUnitario = ($producto['precio_descuento'] ?? 0) > 0
                ? $producto['precio_descuento']
                : $producto['precio'];

            $total += $precioUnitario * $item['cantidad'];
        }

        // Crear factura
        $facturaData = [
            'id_usuario'  => $idUsuario,
            'costo_envio' => 3000,
            'total'       => $total + 3000,
            'activo'      => 1
        ];
        $facturaId = $facturaModel->insert($facturaData, true);

        // Guardar detalles y actualizar producto
        foreach ($carrito as $item) {
            $producto = $productoModel->find($item['id_producto']);

            if (!$producto) {
                continue;
            }

            $precioUnitario = ($producto['precio_descuento'] ?? 0) > 0
                ? $producto['precio_descuento']
                : $producto['precio'];

            // Guardar detalle
            $detalleModel->insert([
                'id_factura'      => $facturaId,
                'id_producto'     => $item['id_producto'],
                'cantidad'        => $item['cantidad'],
                'precio_unitario' => $precioUnitario,
                'subtotal'        => $precioUnitario * $item['cantidad'],
                'activo'          => 1
            ]);

            // Actualizar stock y cantidad vendida
            $nuevoStock = $producto['stock'] - $item['cantidad'];
            $nuevaCantidadVendida = ($producto['cantidad_vendida'] ?? 0) + $item['cantidad'];

            $productoModel->update($item['id_producto'], [
                'stock'            => $nuevoStock,
                'cantidad_vendida' => $nuevaCantidadVendida
            ]);
        }

        // Vaciar carrito desde base de datos
        $carritoModel->where('id_usuario', $idUsuario)->delete();

        return redirect()->to(base_url('catalogo'))->with('success', 'Compra realizada con éxito.');
    }

    public function guardarDireccion(){
        $session = session();
        $id_usuario = $session->get('userid');
        $direccion = $this->request->getPost('direccion');

        if (!$direccion || !$id_usuario) {
            return redirect()->to('carrito')->with('error', 'Dirección no válida.');
        }

        $usuarioModel = new \App\Models\UsuarioModel();
        $usuarioModel->update($id_usuario, ['direccion' => $direccion]);

        return redirect()->to('finalizarCompra');
    }


}
