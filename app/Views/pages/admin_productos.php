<<?php echo $this->extend('layout'); ?>

<?php echo $this->section('contenido'); ?>
    <div class="container mt-5 pt-5">
        <h1 class="mb-4"><?= esc($titulo) ?></h1>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Producto</th>
                    <th>Nombre</th>
                    <th>Equipo</th>
                    <th>Stock</th>
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
<?php echo $this->endSection(); ?>