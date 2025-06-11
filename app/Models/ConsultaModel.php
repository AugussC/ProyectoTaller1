<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsultaModel extends Model
{
    protected $table            = 'consulta';
    protected $primaryKey       = 'id_consulta';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_usuario','mensaje', 'activo'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function consultaConUsuario(){
     return $this->select('consulta.*, usuario.nombre, usuario.apellido, usuario.email')
                ->join('usuario', 'consulta.id_usuario = usuario.id_usuario')
                ->where('consulta.activo', 1)  
                ->findAll();
    }
}
