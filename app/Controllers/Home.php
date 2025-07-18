<?php

namespace App\Controllers;


use App\Models\UsuarioModel;
use App\Models\ProductosModel;
use App\Models\FacturaModel;

class Home extends BaseController
{   

    

    public function index(){
        $productoModel = new ProductosModel();

        $masVendidas = $productoModel->where('activo', 1)
                                    ->orderBy('cantidad_vendida', 'DESC')
                                    ->findAll(5);

    
        $ofertas = $productoModel->where('activo', true)
                                ->where('precio_descuento IS NOT NULL')
                                ->where('precio_descuento !=', 0)
                                ->findAll(16);

      
        $messi = $productoModel->where(['activo' => true, 'jugador_relevante' => 'Messi'])
                            ->findAll(8);

       
        $maradona = $productoModel->where(['activo' => true, 'jugador_relevante' => 'Maradona'])
                                ->findAll(8);

       
        $data = [
            'titulo' => 'Inicio',
            'masVendidas' => $masVendidas,
            'ofertas' => $ofertas,
            'messi' => $messi,
            'maradona' => $maradona
        ];

        return view('pages/principal_proyecto', $data);
    }


    public function catalogo() {
    $productoModel = new ProductosModel();
    $productoModel->desactivarProductosSinStock();

    $termino = $this->request->getGet('q');
    $equipo = $this->request->getGet('equipo');
    $jugador = $this->request->getGet('jugador');

    $builder = $productoModel->where('activo', 1);


    if (!empty($termino)) {
        $builder->groupStart()
            ->like('nombre', $termino)
            ->orLike('jugador_relevante', $termino)
            ->groupEnd();
    }

    if (!empty($equipo)) {
        $builder->where('id_categoria', $equipo);
    }

    if (!empty($jugador)) {
        $builder->like('jugador_relevante', $jugador);
    }

    $resultado = $builder->findAll();

    $db = \Config\Database::connect();
    $categorias = $db->table('categoria')
                     ->select('id_categoria, equipo')
                     ->orderBy('equipo', 'ASC')
                     ->get()
                     ->getResultArray();

    $jugadores = $db->table('productos')
                    ->select('jugador_relevante')
                    ->distinct()
                    ->where('activo', 1)
                    ->where('jugador_relevante IS NOT NULL')
                    ->where('jugador_relevante !=', '')
                    ->orderBy('jugador_relevante', 'ASC')
                    ->get()
                    ->getResultArray();

    $data = [
        'titulo' => 'Catálogo',
        'lista_productos' => $resultado,
        'palabra_buscada' => $termino,
        'equipo' => $equipo,
        'jugador' => $jugador,
        'categoria' => $categorias,
        'jugadores' => $jugadores
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
    $session = session();
    $id_usuario = $session->get('userid');

    $facturaModel = new FacturaModel();

    $facturas = $facturaModel
                    ->where('id_usuario', $id_usuario)
                    ->orderBy('fecha', 'DESC')
                    ->findAll();

    $data = [
        'titulo' => 'Mis Facturas',
        'facturas' => $facturas
    ];

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
