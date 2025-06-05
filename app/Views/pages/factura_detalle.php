<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="<?= base_url('public/assets/css/estilo_detalle_factura') ?>" rel="stylesheet">
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>

<div class="container factura-container">
    <h2 class="text-center">Factura #<?= esc($factura['id_factura']) ?></h2>

    <!-- Empresa y Comprador -->
    <div class="empresa-comprador d-flex flex-column flex-md-row justify-content-between align-items-start mb-4">
        <!-- Empresa -->
        <div class="empresa-info mt-5 mb-md-0 text-md-start text-center">
            <h5 class="mb-2">Comprador</h5>
            <p><strong>Nombre:</strong> <?= esc($usuario['nombre'] . ' ' . $usuario['apellido']) ?></p>
            <p><strong>Email:</strong> <?= esc($usuario['email']) ?></p>
            <p><strong>Dirección:</strong>
                <?= empty($usuario['direccion']) ? 'Retiro en el local' : esc($usuario['direccion']) ?>
            </p>
            
        </div>

        <div class="divider d-none d-md-block"></div>

        <!-- Comprador -->
        <div class="usuario-info text-md-start text-center">
            <img src="<?= base_url('public/assets/img/LogoRetromaniacos.png') ?>" alt="Logo Empresa" class="img-fluid mb-1" style="max-height: 100px;">
            <h5 class="mb-1">Retromaniacos</h5>
            <p class="mb-0">📧 retromaniacos@gmail.com</p>
            <p class="mb-0">📞 +54 3795049857</p>
            <p class="mb-0">📍 Av. Chacabuco 941, Corrientes</p>
        </div>
    </div>

    <!-- Datos de la factura -->
    <div class="factura-info mb-4">
        <h5>Datos de la Factura</h5>
        <p><strong>Fecha:</strong> <?= date('d/m/Y', strtotime($factura['fecha'])) ?></p>
        <p><strong>Costo de envío:</strong> $<?= number_format($factura['costo_envio'], 0, ',', '.') ?></p>
        <p><strong>Total:</strong> $<?= number_format($factura['total'], 0, ',', '.') ?></p>
    </div>

    <!-- Detalle de productos -->
    <div class="table-responsive">
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
    </div>

    <!-- Total final -->
    <div class="text-end mt-3">
        <h5>Total Final: <strong>$<?= number_format($factura['total'], 0, ',', '.') ?></strong></h5>
    </div>

    <!-- Botón volver -->
    <div class="mt-4 text-center">
        <a href="<?= base_url('pedidos') ?>" class="btn btn-volver">← Volver</a>
    </div>
</div>



<?php echo $this->endSection(); ?>
