<?php echo $this->extend('layout'); ?>

    <?php echo $this->section('estilos'); ?>
    <link href="public/assets/css/estilo_facturas.css?v=1.4" rel="stylesheet" >
    <?php echo $this->endSection(); ?> 

    <?php echo $this->section('contenido'); ?>
<div class="container container-factura">
    <h2>Mis Compras</h2>

    <?php if (!empty($facturas)): ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Fecha de compra</th>

                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($facturas as $factura): ?>
                    <tr>
                        <td><?= esc(date('d/m/Y', strtotime($factura['fecha']))) ?></td>
                        <td>
                            <a href="<?= base_url('pedidos/' . $factura['id_factura']) ?>" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> <!-- Ícono de Bootstrap -->
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No tenés facturas registradas todavía.</p>
    <?php endif; ?>
</div>
    <?php echo $this->endSection(); ?> 
