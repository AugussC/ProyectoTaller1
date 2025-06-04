<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="public/assets/css/estilo_catalogo copy 2.css?v=1.3" rel="stylesheet">
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>
<div class="container my-5">
  <h2 class="mb-4">🛒 Mi Carrito</h2>

  <?php if (empty($carrito)): ?>
    <div class="alert alert-info">Tu carrito está vacío.</div>
  <?php else: ?>
    <table class="table table-bordered table-hover">
      <thead class="table-light">
        <tr>
          <th>Producto</th>
          <th>Precio unitario</th>
          <th>Cantidad</th>
          <th>Total</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php 
    $totalGeneral = 0;
    foreach ($carrito as $item): 
      $subtotal = $item['precio'] * $item['cantidad'];
      $totalGeneral += $subtotal;
  ?>
    <tr>
      <td><?= esc($item['nombre']) ?></td>
      <td>$<?= number_format($item['precio'], 0, ',', '.') ?></td>
      <td>
        <a href="<?= base_url('carrito/actualizar/' . $item['id_producto'] . '/restar') ?>" class="btn btn-sm btn-outline-secondary">–</a>
        <span class="mx-2"><?= $item['cantidad'] ?></span>
        <a href="<?= base_url('carrito/actualizar/' . $item['id_producto'] . '/sumar') ?>" class="btn btn-sm btn-outline-secondary">+</a>
      </td>
      <td>$<?= number_format($subtotal, 0, ',', '.') ?></td>
      <td>
        <a href="<?= base_url('carrito/eliminar/' . $item['id_producto']) ?>" class="btn btn-sm btn-danger">🗑</a>
      </td>
    </tr>
  <?php endforeach; ?>
  <tr>
    <td>Costo de envio</td>
    <th colspan="3" class="text-end"></th>
    <td>$3000</td>
  </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="4" class="text-end">Total general:</th>
          <th>$<?= number_format($totalGeneral + 3000, 0, ',', '.') ?></th>
        </tr>
      </tfoot>
    </table>

    <div class="text-end">
      <a href="<?= base_url('finalizarCompra') ?>" class="btn btn-primary">Finalizar compra</a>
    </div>
  <?php endif; ?>
</div>
<?php echo $this->endSection(); ?>