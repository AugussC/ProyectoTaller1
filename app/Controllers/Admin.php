<?php

namespace App\Controllers;

use App\Models\ProductosModel;

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
        $resultado = $productoModel->obtenerProductosConCategoria();
        $data['titulo'] = 'Productos';
        $data['lista_productos'] = $resultado;

        return view('pages/admin_productos', $data);
    }

}


