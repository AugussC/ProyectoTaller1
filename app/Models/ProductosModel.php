<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id_producto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_categoria','nombre', 'talla', 'precio', 'stock'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function obtenerProductosConCategoria()
    {
        return $this->select('productos.*, categoria.equipo')
                    ->join('categoria', 'categoria.id_categoria = productos.id_categoria')
                    ->findAll();
    }
}