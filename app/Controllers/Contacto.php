<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\ContactoModel;
use App\Models\ConsultaModel;

class Contacto extends BaseController
{
    public function consulta()
    {
        $session = session();
        $usuario = null;

        // Verificar si el usuario está logueado
        if ($session->get('login_in')) {
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->find($session->get('userid'));
        }

        // Reglas de validación mínimas (mensaje)
        $rules = [
            'telefono' => 'permit_empty|numeric',
            'mensaje' => 'required|max_length[2000]',
        ];

        // Si el usuario NO está logueado, validar también sus datos personales
        if (!$usuario) {
            $rules = array_merge($rules, [
                'nombre'   => 'required|max_length[100]',
                'apellido' => 'required|max_length[100]',
                'email'    => 'required|valid_email|max_length[100]',
                'telefono' => 'permit_empty|numeric|min_length[10]',
            ]);
        }

        // Validar los datos del formulario
        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->listErrors());
        }

        // Si es usuario registrado, guardar en ConsultaModel
        if ($usuario) {
            $post = [
                'id_usuario' => $usuario['id_usuario'], // Asegurate que este campo exista en tu tabla
                'mensaje'    => $this->request->getPost('mensaje'),
            ];
            $consultaModel = new ConsultaModel();
            $consultaModel->insert($post);
        } else {
            // Si NO está registrado, guardar en ContactoModel
            $post = $this->request->getPost(['nombre', 'apellido', 'email', 'telefono', 'mensaje']);
            $post['telefono'] = $post['telefono'] !== '' ? $post['telefono'] : null;
            $contactoModel = new ContactoModel();
            $contactoModel->insert($post);
        }

        return redirect()->back()->with('success', '¡Gracias por contactarte! Te responderemos pronto.');
    }
}
