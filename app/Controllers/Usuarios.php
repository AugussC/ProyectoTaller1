<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuarios extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Registro';
        return view('pages/registro', $data);
    }

    public function create()
    {
        $rules = [
            
            'nombre' => 'required|max_length[100]',
            'apellido' => 'required|max_length[100]',
            'email' => 'required|max_length[80]|is_unique[usuario.email]',
            'password' => 'required|max_length[50]|min_length[8]',
            'repassword' => 'matches[password]'
        ];
        
        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $userModel = new UsuarioModel();
        $post = $this->request->getPost(['nombre', 'apellido', 'email', 'password']);

        $token = bin2hex(random_bytes(20));

        $userModel->insert([
            'nombre' => $post['nombre'],
            'apellido' => $post['apellido'],
            'email' => $post['email'],
            'contraseña' => password_hash($post['password'], PASSWORD_DEFAULT),
            'rol' => "usuario",
            
        ]);

        $title = 'Registro Exitoso';
        $message = 'Inicia sesion para empezar a navegar';

        return $this->showMessage($title, $message);
    }
    
    
    private function showMessage($title, $message){
        $data = [
            'titulo'=> $title,
            'mensaje' => $message,
        ];

        return view('mensaje', $data);
    } 
}

    