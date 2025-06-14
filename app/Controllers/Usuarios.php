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

   public function guardarCambios(){
    $session = session();
    $usuarioModel = new UsuarioModel();
    $id = $session->get('userid');

    $rules = [
        'nombre' => 'required|max_length[100]',
        'apellido' => 'required|max_length[100]',
        'email'     => 'required|max_length[80]|is_unique[usuario.email,id_usuario,'.$id.']',
        'telefono'  => 'permit_empty|numeric|min_length[10]',
        'direccion' => 'permit_empty|string|max_length[100]'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
    }

    // Si el usuario deja teléfono vacío, se guarda como NULL
    $telefono  = $this->request->getPost('telefono');
    $direccion = $this->request->getPost('direccion');

    $data = [
        'nombre'    => $this->request->getPost('nombre'),
        'apellido'  => $this->request->getPost('apellido'),
        'email'     => $this->request->getPost('email'),
        'telefono'  => $telefono === '' ? null : $telefono,
        'direccion' => $direccion === '' ? null : $direccion,
    ];

    $usuarioModel->update($id, $data);
    return redirect()->to('/perfil')->with('mensaje', 'Datos actualizados correctamente');
}


    public function cambiarPassword()
{
    $session = session();
    $usuarioModel = new UsuarioModel();
    $id = $session->get('userid');

    $rules =[
        'nueva_password' => 'required|max_length[50]|min_length[8]',
    ];

     if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

    $nuevaPassword = password_hash($this->request->getPost('nueva_password'), PASSWORD_DEFAULT);
    $usuarioModel->update($id, ['contraseña' => $nuevaPassword]);

    return redirect()->to('/perfil')->with('mensaje', 'Contraseña actualizada correctamente');
}

}

    