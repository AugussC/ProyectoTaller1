<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
    <link href="public/assets/css/estilo_catalogo copy.css?v=1.23" rel="stylesheet">
    <?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>

<div class="hero-banner">
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

            
            <!-- Más equipos -->
          </select>
        </div>

        <div class="mb-3">
          <label for="Jugador" class="form-label">Equipo</label>
          <select id="jugador" name="jugador" class="form-select">
            <option value="">Cualquiera</option>
            <option value="Messi" <?= ($_GET['jugador'] ?? '') == 'Messi' ? 'selected' : '' ?>>Leo Messi</option>
            <option value="Maradona" <?= ($_GET['jugador'] ?? '') == 'Maradona' ? 'selected' : '' ?>>Diego Maradona</option>


            <!-- Más jugadores -->
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Aplicar</button>
      </form>
    </div>

    <!-- Columna derecha: productos -->
    <div class="col-12 col-md-9">
      <div class="row">
        <?php foreach ($lista_productos as $producto): ?>
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card h-100">
              <img src="<?= base_url($producto['ruta_imagen']) ?>" class="card-img-top img-producto" alt="<?= $producto['nombre'] ?>">
              <div class="card-body">
                <h6 class="card-title"><?= $producto['nombre'] ?></h6>
                <p class="card-price-now">$<?= number_format($producto['precio'], 0, ',', '.') ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>
<?php echo $this->endSection(); ?>
