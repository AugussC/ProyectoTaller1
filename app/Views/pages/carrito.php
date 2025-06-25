<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="public/assets/css/estilo_carrito.css?v=2" rel="stylesheet">
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>
<div class="container">
  <h2>Mi Carrito</h2>

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
      <?= session()->getFlashdata('success') ?>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
      <?= session()->getFlashdata('error') ?>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-info">
      <?= session()->getFlashdata('mensaje') ?>
    </div>
  <?php endif; ?>


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
          <td>Costo de envío</td>
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
      <?php if (empty($direccionUsuario)): ?>
        <button class="btn btn-primary" id="btn-finalizar-sin-direccion">Finalizar compra</button>
      <?php else: ?>
        <a href="<?= base_url('finalizarCompra') ?>" class="btn btn-primary">Finalizar compra</a>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div>

<!-- Modal de Dirección -->
<div class="modal fade" id="modalDireccion" tabindex="-1" aria-labelledby="modalDireccionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="<?= base_url('guardarDireccion') ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Agregar dirección</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="modal-direccion">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar y continuar</button>
        </div>
      </div>
    </form>
  </div>
</div>



<?php echo $this->endSection(); ?>

<?php echo $this->section('javascrip'); ?>
  <script src="public/assets/js/carritoModal.js"></script>
<?php echo $this->endSection(); ?>