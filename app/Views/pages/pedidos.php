<?= $this->extend('layout') ?>

<?php echo $this->section('estilos'); ?> 
    <link href="public/assets/css/estilo_pedido.css?v=1.7" rel="stylesheet">
<?php echo $this->endSection(); ?> 

<?= $this->section('contenido') ?>

<div class="container mt-5">
    <h2 class="mb-4">Facturas realizadas</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre completo</th>
                <th>Correo</th>
                <th>Fecha de compra</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($facturas as $factura): ?>
                <tr>
                    <td><?= esc($factura['id_factura']) ?></td>
                    <td><?= esc($factura['nombre'] . ' ' . $factura['apellido']) ?></td>
                    <td><?= esc($factura['email']) ?></td>
                    <td><?= esc(date('d/m/Y ', strtotime($factura['fecha']))) ?></td>
                    <td>
                        <a href="<?= base_url('pedidos/' . $factura['id_factura']) ?>" class="btn btn-sm btn-primary">
                            <i class="bi bi-eye"></i> <!-- Ícono de Bootstrap -->
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
