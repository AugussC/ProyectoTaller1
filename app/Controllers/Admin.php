<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Principal';
        return view('pages/admin_principal', $data);
    }


}