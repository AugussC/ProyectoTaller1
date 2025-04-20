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

    public function Comercializacion()
    {
        $data['titulo'] = 'Lavado Recomendado';
    return view('navbar', $data)
         . view('lavado_recomendado')
         . view('footer', $data);
    }
}