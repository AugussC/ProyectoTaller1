<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table      = 'categoria';
    protected $primaryKey = 'id_categoria';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // o 'object' si preferís trabajar con objetos
    protected $useSoftDeletes = false;   

    protected $allowedFields = ['equipo'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;


    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; 
}
