<?php

namespace App\Controllers;


use App\Models\UsuarioModel;
use App\Models\ProductosModel;

class Home extends BaseController
{   

    

    public function index(){
        $productoModel = new ProductosModel();

        // 5 más vendidas
        $masVendidas = $productoModel->where('activo', 1)
                                    ->orderBy('cantidad_vendida', 'DESC')
                                    ->findAll(5);

        // 15 de ofertas del día
        $ofertas = $productoModel->where('activo', true)
                                ->where('precio_descuento IS NOT NULL')
                                ->where('precio_descuento !=', 0)
                                ->findAll(15);

        // 8 camisetas de Messi
        $messi = $productoModel->where(['activo' => true, 'jugador_relevante' => 'Messi'])
                            ->findAll(8);

        // 8 camisetas de Maradona
        $maradona = $productoModel->where(['activo' => true, 'jugador_relevante' => 'Maradona'])
                                ->findAll(8);

        // Título y datos a pasar a la vista
        $data = [
            'titulo' => 'Inicio',
            'masVendidas' => $masVendidas,
            'ofertas' => $ofertas,
            'messi' => $messi,
            'maradona' => $maradona
        ];

        return view('pages/principal_proyecto', $data);
    }


    public function catalogo() 
{
    $productoModel = new ProductosModel();

    $termino = $this->request->getGet('q');
    $equipo = $this->request->getGet('equipo');
    $jugador = $this->request->getGet('jugador');

    $builder = $productoModel->where('activo', 1);

    // Filtro por búsqueda general
    if (!empty($termino)) {
        $builder->groupStart()
            ->like('nombre', $termino)
            ->orLike('jugador_relevante', $termino)
            ->groupEnd();
    }

    // Filtro por equipo (categoría)
    if (!empty($equipo)) {
        $builder->where('id_categoria', $equipo);
    }

    // Filtro por jugador
    if (!empty($jugador)) {
        $builder->like('jugador_relevante', $jugador);
    }

    $resultado = $builder->findAll();

    $data = [
        'titulo' => 'Catálogo',
        'lista_productos' => $resultado,
        'palabra_buscada' => $termino,
        'equipo' => $equipo,
        'jugador' => $jugador
    ];

    return view('pages/catalogo', $data);
}

    public function contactos()
    {
        $session = session();
        $usuario = null;

        if ($session->get('login_in')) {
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->find($session->get('userid'));
        }

        $data = [
        'titulo'  => 'Contactos',
        'usuario' => $usuario
         ];
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

    public function facturas()
{
        $data['titulo'] = 'Tus Facturas';
        return view('pages/facturas', $data);
}

    public function perfil()
    {
        $session = session();
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($session->get('userid'));

        $data = [
        'titulo'  => 'Perfil',
        'usuario' => $usuario
         ];
        return view('pages/perfil', $data);
    }
}