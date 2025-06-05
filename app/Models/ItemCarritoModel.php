<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemCarritoModel extends Model
{
    protected $table            = 'item_carrito';
    protected $primaryKey       = 'id_detalle_carrito';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_usuario','id_producto' ,'cantidad'];

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
    public function consultarCarrito(){
        $session = session();
        $id_usuario = $session->get('userid');

        $itemCarritoModel = new ItemCarritoModel();
        $hayProductosEnCarrito = $itemCarritoModel
            ->where('id_usuario', $id_usuario)
            ->countAllResults() > 0;

        // Enviás esto a la vista
        $data['carrito_con_items'] = $hayProductosEnCarrito;
        return $data;
    }
}
