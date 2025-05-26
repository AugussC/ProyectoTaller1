<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Inicio de Sesion';
        return view('pages/login', $data);
    }

    public function auth()
    {
        // Cambiamos la regla de validación para que pida 'email' en lugar de 'user'
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $userModel = new UsuarioModel();
        $post = $this->request->getPost(['email', 'password']);

        // Asumimos que tu método validarUsuario también acepta email en lugar de username
        $user = $userModel->validarUsuario($post['email'], $post['password']);

        if ($user !== null) {
            $this->setSession($user);
            return redirect()->to(base_url('/'));
        }

        return redirect()->back()->withInput()->with('errors', 'El email y/o contraseña son incorrectos');
    }
    
    private function setSession($userData) {
    $data = [
        'login_in' => true,
        'userid'   => $userData['id_usuario'],
        'username' => $userData['nombre'],
        'rol'      => $userData['rol']  
    ];

    $this->session->set($data);
}

    public function logout(){
    $this->session->destroy();
    return redirect()->to(base_url());
    }

}