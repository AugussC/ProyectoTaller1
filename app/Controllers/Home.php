<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
{
    $data['titulo'] = 'principal';
    return view('navbar', $data)
         . view('principal_proyecto')
         . view('footer', $data);
}


    public function contactos()
    {
        $data['titulo'] = 'Contactos';
    return view('navbar', $data)
         . view('contactos')
         . view('footer', $data);
    }

    public function lavado_recomendado()
    {
        $data['titulo'] = 'Lavado Recomendado';
    return view('navbar', $data)
         . view('lavado_recomendado')
         . view('footer', $data);
    }

    public function guia_talles()
    {
        $data['titulo'] = 'Guia de Talles';
    return view('navbar', $data)
         . view('guia_talles')
         . view('footer', $data);
    }

    public function comercializacion()
    {
        $data['titulo'] = 'Comercializacion';
    return view('navbar', $data)
         . view('comercializacion')
         . view('footer', $data);
    }

    public function preguntas_frecuentes()
    {
        $data['titulo'] = 'Preguntas Frecuentes';
    return view('navbar', $data)
         . view('preguntas_frecuentes')
         . view('footer', $data);
    }

    public function terminos()
    {
    $data['titulo'] = 'Términos y Condiciones';
    return view('navbar', $data)
         . view('terminos')
         . view('footer', $data);
    }

    public function quienes_somos()
    {
    $data['titulo'] = 'Quiénes Somos';
    return view('navbar', $data)
         . view('quienes_somos')
         . view('footer', $data);
    }

}