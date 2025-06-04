<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="public/assets/css/estilo_detalle_factura.css?v=1.0" rel="stylesheet">
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>

<div class="container detalle-container">
    <div class="detalle-header">
        <h2>Detalle de Factura #<?= esc($factura['id_factura']) ?></h2>
    </div>

    <div class="usuario-info">
        <h4>Comprador</h4>
        <p><strong>Nombre:</strong> <?= esc($usuario['nombre'] . ' ' . $usuario['apellido']) ?></p>
        <p><strong>Email:</strong> <?= esc($usuario['email']) ?></p>
    </div>

    <div class="factura-info">
        <h4>Datos de la factura</h4>
        <p><strong>Fecha:</strong> <?= date('d/m/Y H:i', strtotime($factura['fecha'])) ?></p>
        <p><strong>Costo de envío:</strong> $<?= number_format($factura['costo_envio'], 0, ',', '.') ?></p>
        <p><strong>Total:</strong> $<?= number_format($factura['total'], 0, ',', '.') ?></p>
    </div>

    <table class="table table-bordered detalle-table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detalles as $detalle): ?>
                <tr>
                    <td><?= esc($detalle['producto_nombre']) ?></td>
                    <td><?= esc($detalle['cantidad']) ?></td>
                    <td>$<?= number_format($detalle['precio_unitario'], 0, ',', '.') ?></td>
                    <td>$<?= number_format($detalle['subtotal'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="total-box">
        Total Final: $<?= number_format($factura['total'], 0, ',', '.') ?>
    </div>

    <a href="<?= base_url('admin/facturas') ?>" class="btn-volver">← Volver al listado</a>
</div>

<?php echo $this->endSection(); ?>
