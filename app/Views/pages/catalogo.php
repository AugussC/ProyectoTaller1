<?php echo $this->extend('layout'); ?>



<?php echo $this->section('contenido'); ?>
   <div class="container mt-4 pt-5">
    <h2>Catalogo</h2>
  <div class="row mb-5">
    <?php foreach ($lista_productos as $producto): ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card h-100">
          <div class="card-img-container">
            <img src="<?= base_url($producto['ruta_imagen']) ?>" class="img-producto card-img-top" alt="<?= $producto['nombre'] ?>">
          </div>
          <div class="card-body d-flex flex-column">
            <h6 class="card-title"><?= $producto['nombre'] ?></h6>
            <p class="card-previous-price">$<?= number_format($producto['precio'], 0, ',', '.') ?></p>
            <h5 class="card-price-now">$25.200 <span class="beneficios">28%OFF</span></h5>
                    <p class="beneficios">Pagando de Contado</p>
                    <p class="beneficios">Envío gratis</p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?php echo $this->endSection(); ?>