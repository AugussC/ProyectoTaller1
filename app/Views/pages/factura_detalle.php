<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="<?= base_url('public/assets/css/estilo_detalle_factura.css?v=1.9') ?>" rel="stylesheet">
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>

<div class="container factura-container">
    <h2>Factura #<?= esc($factura['id_factura']) ?></h2>

    
<div class="empresa-comprador">
  
    <div class="empresa-info">
    <img src="<?= base_url('public/assets/img/LogoRetromaniacos.png') ?>" alt="Logo Empresa" class="logo-empresa">
    <h5 class="nombre-empresa">Retromaniacos</h5>
    <p class="dato-empresa">📧 retromaniacos@gmail.com</p>
    <p class="dato-empresa">📞 +54 3795049857</p>
    <p class="dato-empresa">📍 Av. Chacabuco 941, Corrientes</p>
</div>


    

   
    <div class="usuario-info ">
        <h5>Comprador</h5>
        <p><strong>Nombre:</strong> <?= esc($usuario['nombre'] . ' ' . $usuario['apellido']) ?></p>
        <p><strong>Email:</strong> <?= esc($usuario['email']) ?></p>
        <p><strong>Dirección:</strong>
            <?= empty($usuario['direccion']) ? 'Retiro en el local' : esc($usuario['direccion']) ?>
        </p>
    </div>
</div>



    <!-- Datos de la factura -->
    <div class="factura-info">
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

   
    <div class="text-end">
        <h5>Total Final: <strong>$<?= number_format($factura['total'], 0, ',', '.') ?></strong></h5>
    </div>

    <div class="contenier-btn-volver">
        <a href="<?= base_url('pedidos') ?>" class="btn btn-volver">← Volver</a>
    </div>
</div>



<?php echo $this->endSection(); ?>
