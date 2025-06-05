<?php echo $this->extend('layout'); ?>
<?php $session = session(); ?>

<?php echo $this->section('estilos'); ?> 
    <link href="public/assets/css/estilo_catalogo copy 2.css?v=1.9" rel="stylesheet">
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>
<div class="container-fluid-2">
    <img src="<?= base_url('public/assets/img/banner_Catalogo.png') ?>" alt="Camisetas" class="img-fluid w-100">
</div>

<div class="container mt-4 pt-4">
  <div class="row">
      
    <!-- Columna izquierda: filtros -->
    <div class="col-12 col-md-3 mb-4">
      <h5>Filtrar</h5>
      <form method="get" action="<?= base_url('catalogo') ?>">
        <div class="mb-3">
          <label for="equipo" class="form-label">Equipo</label>
          <select id="equipo" name="equipo" class="form-select">
            <option value="">Todos</option>
            <option value="1" <?= ($_GET['equipo'] ?? '') == '1' ? 'selected' : '' ?>>River Plate</option>
            <option value="2" <?= ($_GET['equipo'] ?? '') == '2' ? 'selected' : '' ?>>Boca Juniors</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="jugador" class="form-label">Jugador</label>
          <select id="jugador" name="jugador" class="form-select">
            <option value="">Cualquiera</option>
            <option value="Messi" <?= ($_GET['jugador'] ?? '') == 'Messi' ? 'selected' : '' ?>>Leo Messi</option>
            <option value="Maradona" <?= ($_GET['jugador'] ?? '') == 'Maradona' ? 'selected' : '' ?>>Diego Maradona</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Aplicar</button>
      </form>
    </div>

    <!-- Columna derecha: productos -->
    <div class="col-12 col-md-9">
      <div class="row">

        <?php if (empty($lista_productos)): ?>
          <div class="alert alert-warning mt-4" role="alert">
            No encontramos resultados para '<?= esc($palabra_buscada) ?>'. Revisa si está bien escrita o intentá con otra palabra.
          </div>
        <?php else: ?>
          <h2>Catalogo</h2>
          <div class="row mb-5">
            <?php foreach ($lista_productos as $producto): ?>
              <?php
                $precioOriginal = $producto['precio'];
                $precioDescuento = !empty($producto['precio_descuento']) && $producto['precio_descuento'] > 0 ? $producto['precio_descuento'] : null;
                $cuotas = (int)$producto['cuotas'];
              ?>
              <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="card h-100 d-flex flex-column">
                  <img src="<?= base_url($producto['ruta_imagen']) ?>" class="card-img-top img-producto" alt="<?= esc($producto['nombre']) ?>">
                  <div class="card-body d-flex flex-column">
                    <h6 class="card-title"><?= $producto['nombre'] ?></h6>

                    <?php if ($precioDescuento): ?>
                      <p class="card-previous-price">$<?= number_format($producto['precio'], 0, ',', '.') ?></p>
                      <h5 class="card-price-now text-success">
                        $<?= number_format($precioDescuento, 0, ',', '.') ?>
                        <span class="beneficios">
                          <?= round((1 - $precioDescuento / $precioOriginal) * 100) ?>%OFF
                        </span>
                      </h5>
                    <?php else: ?>
                      <p class="card-previous-price"></p>
                      <h5 class="card-price-now text-success">
                        $<?= number_format($precioOriginal, 0, ',', '.') ?>
                      </h5>
                    <?php endif; ?>

                    <?php if ($cuotas > 0): ?>
                      <p class="beneficios">
                        <?= $cuotas ?> Cuotas sin interés de $<?= number_format(($precioDescuento ?? $precioOriginal) / $cuotas, 2, ',', '.') ?>
                      </p>
                    <?php else: ?>
                      <p class="beneficios">Pagando de contado</p>
                    <?php endif; ?>

                    <?php if ($session->get('login_in')): ?>
                      <div class="mt-auto">
                        <a href="<?= base_url('carrito/agregarCarrito/' . $producto['id_producto']) ?>" class="btn btn-primary w-100 mt-3">
                          Añadir a Carrito <i class="bi bi-cart"></i>
                        </a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>
