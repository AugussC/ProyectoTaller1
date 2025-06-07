<?= $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="<?= base_url('public/assets/css/estilo_productos.css') ?>" rel="stylesheet">
<?php echo $this->endSection(); ?>

<?= $this->section('contenido'); ?>
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center"><?= esc($titulo) ?></h1>

    
    <!-- Botones superiores -->
    <div class="mb-4 d-flex justify-content-between">
        <a href="<?= site_url('productos') ?>" class="btn btn-secondary">Ver Productos</a>
    </div> 

    

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger"><?= session('error') ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="table">
            <tr>
                <th>ID Producto</th>
                <th>Nombre</th>
                <th>Equipo</th>
                <th>Stock</th>
                <th>Acciones</th> <!-- Nueva columna -->
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($lista_productos)): ?>
                <?php foreach ($lista_productos as $producto): ?>
                    <tr>
                        <td><?= esc($producto['id_producto']) ?></td>
                        <td><?= esc($producto['nombre']) ?></td>
                        <td><?= esc($producto['equipo']) ?></td>
                        <td><?= esc($producto['stock']) ?></td>
                        <td>
                            <a href="<?= site_url('productos/editar/' . $producto['id_producto']) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= site_url('productos/activar/' . $producto['id_producto']) ?>" class="btn btn-success btn-sm">Activar</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No hay productos disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>

