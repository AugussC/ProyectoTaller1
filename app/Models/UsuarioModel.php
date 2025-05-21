<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    // Campos permitidos para inserciones y actualizaciones
    protected $allowedFields = ['nombre', 'apellido', 'email', 'contraseña', 'telefono', 'rol'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Fechas
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; // No se usa si useSoftDeletes es false
}
