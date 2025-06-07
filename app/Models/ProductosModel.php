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

    protected $allowedFields = ['id_categoria', 'cuotas', 'nombre', 'jugador_relevante', 'ruta_imagen','cantidad_vendida', 'precio','precio_descuento', 'descuento', 'envio_gratis','activo' , 'stock' ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function obtenerProductosConEquipo() {
        return $this->select('productos.*, categoria.equipo')
                    ->join('categoria', 'categoria.id_categoria = productos.id_categoria')
                    ->where('productos.activo', 1)
                    ->where('productos.stock >', 0)
                    ->findAll();
    }

    public function desactivarProductosSinStock() {
        // Encuentra productos activos con stock <= 0
        $productosSinStock = $this->where('activo', 1)
                                ->where('stock <=', 0)
                                ->findAll();

        foreach ($productosSinStock as $producto) {
            $this->update($producto['id_producto'], ['activo' => 0]);
        }
    }

    public function obtenerProductosInactivosConCategoria(){
        return $this->select('productos.*, categoria.equipo')
                    ->join('categoria', 'categoria.id_categoria = productos.id_categoria')
                    ->where('productos.activo', 0)
                    ->findAll();
    }

   



}