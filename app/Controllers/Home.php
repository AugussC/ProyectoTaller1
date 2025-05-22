<?php

namespace App\Controllers;



use App\Models\ProductosModel;

class Home extends BaseController
{   


    public function index(): string
    {
        $data['titulo'] = 'Principal';
        return view('pages/principal_proyecto', $data);
    }

    public function catalogo() 
    {
        

        
        $productoModel = new ProductosModel();
        $resultado = $productoModel->where('activo', 1)->findAll();
        $data['titulo'] = 'Catalogo';
        $data['lista_productos'] = $resultado;
        return view('pages/catalogo', $data);
    }


    public function contactos()
    {
        $data['titulo'] = 'Contactos';
        return view('pages/contactos', $data);
    }

    public function lavado_recomendado()
    {
        $data['titulo'] = 'Lavado Recomendado';
        return view('pages/lavado_recomendado', $data);
    }

    public function guia_talles()
    {
        $data['titulo'] = 'Guia de Talles';
        return view('pages/guia_talles', $data);
    }

    public function comercializacion()
    {
        $data['titulo'] = 'Comercializacion';
        return view('pages/comercializacion', $data);
    }

    public function preguntas_frecuentes()
    {
        $data['titulo'] = 'Preguntas Frecuentes';
        return view('pages/preguntas_frecuentes', $data);
    }

    public function terminos()
    {
        $data['titulo'] = 'Términos y Condiciones';
        return view('pages/terminos', $data);
    }

    public function quienes_somos()
    {
        $data['titulo'] = 'Quiénes Somos';
        return view('pages/quienes_somos', $data);
    }

}