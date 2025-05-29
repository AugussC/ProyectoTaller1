<?php echo $this->extend('layout'); ?> 

    <?php echo $this->section('estilos'); ?> 
    <link href="public/assets/css/estiloprincipal.css?v=1.23" rel="stylesheet">
    <?php echo $this->endSection(); ?> 


    <?php echo $this->section('contenido'); ?> 
    <!-- Contenedor principal -->
    <div class="container">

    <!-- Carrusel con ID para controlarlo -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">

        <!-- Indicadores del carrusel (los botones de abajo que marcan la posición) -->
        <div class="carousel-indicators">
          <!-- Primer indicador -->
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <!-- Segundo indicador -->
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <!-- Tercer indicador -->
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Contenedor de las diapositivas -->
        <div class="carousel-inner ">
          
          <!-- Primera diapositiva activa -->
          <div class="carousel-item carrusel-imagen active">
            <img src="public/assets/img/SomosRetroManiacos.png" alt="Imagen Carrusel 1">
            <div class="carousel-caption d-lg-block">
              <h5>▼RetroManiacos▼</h5>
              <p>La camiseta de tu sueño la encontrás acá</p>
            </div>
          </div>

          <!-- Segunda diapositiva -->
          <div class="carousel-item carrusel-imagen">
            <img src="public/assets/img/Enviosymas.png" alt="Imagen Carrusel 2">
            <div class="carousel-caption d-lg-block">
              <h5>Tu Compra, Más Fácil</h5>
              <p>Pagá en cuotas sin interés y recibí tu pedido sin cargo.</p>
            </div>
          </div>

          <!-- Tercera diapositiva -->
          <div class="carousel-item carrusel-imagen">
            <img src="public/assets/img/OfertasOtoño.png" alt="Imagen Carrusel 3">
            <div class="carousel-caption d-lg-block">
              <h5>🍂¡Ofertas de Otoño!🍂</h5>
              <p>Renová tu colección con los clásicos de siempre a precios que no se repiten. ¡Solo por tiempo limitado!</p>
            </div>
          </div>

        </div>

        <!-- Controles para avanzar a la diapositiva anterior -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <!-- Controles para avanzar a la diapositiva siguiente -->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>

    </div>

      <!-- Sección de productos más vendidos -->
    <div class="container-fluid mas-vendidos bgcustom">
      <h1>Más vendidos</h1>
      <div class="row">
        
        <?php foreach ($masVendidas as $index => $producto): ?>
          <div class="<?= $index === 0 ? 'producto-1 col-md-12 col-lg-3 ms-lg-5 me-lg-3' : 'producto col-sm-6 col-md-3 col-lg-2' ?>">
            <div class="card">
              <img src="<?= base_url($producto['ruta_imagen']) ?>" class="<?= $index === 0 ? 'img-producto-1' : 'img-producto' ?>" alt="<?= esc($producto['nombre']) ?>">
              <div class="card-body">
                <h6 class="card-title"><?= esc($producto['nombre']) ?></h6>

                <?php if (!empty($producto['precio_descuento'])): ?>
                  <!-- Con descuento -->
                  <p class="card-previous-price">$<?= number_format($producto['precio'], 0, ',', '.') ?></p>
                  <h5 class="card-price-now text-success">
                    $<?= number_format($producto['precio_descuento'], 0, ',', '.') ?>
                    <span class="beneficios">
                      <?= round((1 - $producto['precio_descuento'] / $producto['precio']) * 100) ?>%OFF
                    </span>
                  </h5>
                  <?php if ((int)$producto['cuotas'] > 0): ?>
                  <?php if (!empty($producto['precio_descuento']) && $producto['precio_descuento'] > 0): ?>
                      <p class="beneficios">
                          <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio_descuento'] / $producto['cuotas'], 2, ',', '.') ?>
                      </p>
                  <?php else: ?>
                      <p class="beneficios">
                          <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio'] / $producto['cuotas'], 2, ',', '.') ?>
                      </p>
                  <?php endif; ?>
              <?php else: ?>
                  <p class="beneficios">Pagando de contado</p>
              <?php endif; ?>

                <?php else: ?>
                  <!-- Sin descuento -->
                  <p class="card-previous-price"></p>
                  <h5 class="card-price-now text-success">
                    $<?= number_format($producto['precio'], 0, ',', '.') ?>
                  </h5>
                  <?php if ((int)$producto['cuotas'] > 0): ?>
                  <?php if (!empty($producto['precio_descuento']) && $producto['precio_descuento'] > 0): ?>
                      <p class="beneficios">
                          <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio_descuento'] / $producto['cuotas'], 2, ',', '.') ?>
                      </p>
                  <?php else: ?>
                      <p class="beneficios">
                          <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio'] / $producto['cuotas'], 2, ',', '.') ?>
                      </p>
                  <?php endif; ?>
              <?php else: ?>
                  <p class="beneficios">Pagando de contado</p>
              <?php endif; ?>

                <?php endif; ?>

              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>



    <!-- Sección: Ofertas del Día -->
     
<div class="container-fluid seccion-ofertas bgcustom">
  <h1>Ofertas del Día</h1>

  <!-- Carrusel de Ofertas -->
  <div id="carouselOfertas" class="carousel slide">
    <div class="carousel-inner">

      <?php 
      $chunkedOfertas = array_chunk($ofertas, 4); // 4 productos por slide
      foreach ($chunkedOfertas as $i => $slide): ?>
        <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
          <div class="row producto-ofertas">
            <?php foreach ($slide as $producto): ?>
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="<?= base_url($producto['ruta_imagen']) ?>" class="img-producto" alt="<?= esc($producto['nombre']) ?>">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title"><?= esc($producto['nombre']) ?></h6>

                    <?php if (!empty($producto['precio_descuento'])): ?>
                      <!-- Producto con oferta -->
                      <p class="card-previous-price">$<?= number_format($producto['precio'], 0, ',', '.') ?></p>
                      <h5 class="card-price-now text-success">
                        $<?= number_format($producto['precio_descuento'], 0, ',', '.') ?>
                        <span class="beneficios">
                          <?= round((1 - $producto['precio_descuento'] / $producto['precio']) * 100) ?>%OFF
                        </span>
                      </h5>
                    <?php endif; ?>
                    <?php if ((int)$producto['cuotas'] > 0): ?>
                    <?php if (!empty($producto['precio_descuento']) && $producto['precio_descuento'] > 0): ?>
                        <p class="beneficios">
                            <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio_descuento'] / $producto['cuotas'], 2, ',', '.') ?>
                        </p>
                    <?php else: ?>
                        <p class="beneficios">
                            <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio'] / $producto['cuotas'], 2, ',', '.') ?>
                        </p>
                    <?php endif; ?>
                <?php else: ?>
                    <p class="beneficios">Pagando de contado</p>
                <?php endif; ?>



                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- Controles del carrusel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOfertas" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselOfertas" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</div>

<!-- Sección: Card Messi + Carrusel en la misma fila -->
<?php if (!empty($messi)): ?>
<div class="container-fluid container-jugador bgcustom">
  <div class="row productos-jugador">

    <!-- Card de Messi  -->
    <div class="card-jugador col-md-3">
      <div class="card no-border bgcustom">
        <img src="public/assets/img/lionelmessi.jpg" class="imagen-jugador" alt="Lionel Messi">
        <div class="titulo-card-jugador">
          <h2>Lionel Messi</h2>
        </div>
      </div>
    </div>

    <!-- Carrusel de productos Messi -->
    <div class="col-md-9">
      <div id="carouselMessi" class="carousel slide">
        <div class="carousel-inner">

          <?php foreach (array_chunk($messi, 4) as $index => $grupo): ?>
          <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <div class="row producto-jugador">

              <?php foreach ($grupo as $producto): ?>
              <div class="col-6 col-md-3 col-xl-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="<?= base_url($producto['ruta_imagen']) ?>" class="img-producto" alt="<?= esc($producto['nombre']) ?>">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title"><?= esc($producto['nombre']) ?></h6>

                    <?php if (!empty($producto['precio_descuento'])): ?>
                      <p class="card-previous-price">$<?= number_format($producto['precio'], 0, ',', '.') ?></p>
                      <h5 class="card-price-now">$<?= number_format($producto['precio_descuento'], 0, ',', '.') ?>
                        <span class="beneficios">
                          <?= round(100 - ($producto['precio_descuento'] / $producto['precio']) * 100) ?>%OFF
                        </span>
                      </h5>
                    <?php else: ?>
                      <h5 class="card-price-now">$<?= number_format($producto['precio'], 0, ',', '.') ?></h5>
                    <?php endif; ?>

                    <?php if ((int)$producto['cuotas'] > 0): ?>
                    <?php if (!empty($producto['precio_descuento']) && $producto['precio_descuento'] > 0): ?>
                        <p class="beneficios">
                            <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio_descuento'] / $producto['cuotas'], 2, ',', '.') ?>
                        </p>
                    <?php else: ?>
                        <p class="beneficios">
                            <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio'] / $producto['cuotas'], 2, ',', '.') ?>
                        </p>
                    <?php endif; ?>
                <?php else: ?>
                    <p class="beneficios">Pagando de contado</p>
                <?php endif; ?>

                  </div>
                </div>
              </div>
              <?php endforeach; ?>

            </div>
          </div>
          <?php endforeach; ?>

        </div>

        <!-- Controles del carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMessi" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMessi" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </div>

  </div>
</div>
<?php endif; ?>

<!-- Sección: Card Maradona + Carrusel en la misma fila -->
<?php if (!empty($maradona)): ?>
<div class="container-fluid container-jugador bgcustom">
  <div class="row productos-jugador">

    <!-- Card de Messi  -->
    <div class="card-jugador col-md-3">
      <div class="card no-border bgcustom">
        <img src="public/assets/img/diegomaradona.jpg" class="imagen-jugador" alt="Diego Armando Maradona">
        <div class="titulo-card-jugador">
          <h2>Diego Armando Maradona</h2>
        </div>
      </div>
    </div>

    <!-- Carrusel de productos Messi -->
    <div class="col-md-9">
      <div id="carouselMaradona" class="carousel slide">
        <div class="carousel-inner">

          <?php foreach (array_chunk($maradona, 4) as $index => $grupo): ?>
          <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <div class="row producto-jugador">

              <?php foreach ($grupo as $producto): ?>
              <div class="col-6 col-md-3 col-xl-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="<?= base_url($producto['ruta_imagen']) ?>" class="img-producto" alt="<?= esc($producto['nombre']) ?>">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title"><?= esc($producto['nombre']) ?></h6>

                    <?php if (!empty($producto['precio_descuento'])): ?>
                      <p class="card-previous-price">$<?= number_format($producto['precio'], 0, ',', '.') ?></p>
                      <h5 class="card-price-now">$<?= number_format($producto['precio_descuento'], 0, ',', '.') ?>
                        <span class="beneficios">
                          <?= round(100 - ($producto['precio_descuento'] / $producto['precio']) * 100) ?>%OFF
                        </span>
                      </h5>
                    <?php else: ?>
                      <h5 class="card-price-now">$<?= number_format($producto['precio'], 0, ',', '.') ?></h5>
                    <?php endif; ?>

                    <?php if ((int)$producto['cuotas'] > 0): ?>
                    <?php if (!empty($producto['precio_descuento']) && $producto['precio_descuento'] > 0): ?>
                        <p class="beneficios">
                            <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio_descuento'] / $producto['cuotas'], 2, ',', '.') ?>
                        </p>
                    <?php else: ?>
                        <p class="beneficios">
                            <?= $producto['cuotas'] ?> Cuotas sin interés de $<?= number_format($producto['precio'] / $producto['cuotas'], 2, ',', '.') ?>
                        </p>
                    <?php endif; ?>
                <?php else: ?>
                    <p class="beneficios">Pagando de contado</p>
                <?php endif; ?>

                  </div>
                </div>
              </div>
              <?php endforeach; ?>

            </div>
          </div>
          <?php endforeach; ?>

        </div>

        <!-- Controles del carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMaradona" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMaradona" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </div>

  </div>
</div>
<?php endif; ?>


    <!-- Contenedor principal -->
    <div class="container-fluid container-tarjetas bgcustom">

      <!-- Fila superior con dos cards -->
      <div class="row fila-tarjetas">

        <!-- Card 1: Guía de talles -->
        <div class="tarjetas col-md-5">
          <div class="card card-tarjetas">
            <!-- Icono de la card -->
            <i class="bi icono bi-rulers"></i>
            <!-- Cuerpo de la card -->
            <div class="card-body">
              <h5 class="card-title">Guía de talles</h5>
              <p class="card-text">¿No sabes qué talle sos?</p>
              <!-- Botón para redirigir a la guía de talles -->
              <a href="<?= base_url('guia_talles')?>" class="btn btn-primary">Click Aquí</a>
            </div>
          </div>
        </div>

        <!-- Card 2: Lavados recomendados -->
        <div class="tarjetas col-md-5">
          <div class="card card-tarjetas">
            <!-- Icono de la card -->
            <i class="bi icono bi-droplet-fill"></i>
            <!-- Cuerpo de la card -->
            <div class="card-body">
              <h5 class="card-title">Lavados recomendados</h5>
              <p class="card-text">Información de cómo lavar correctamente la camiseta.</p>
              <!-- Botón para redirigir a la página de lavados recomendados -->
              <a href="<?= base_url('lavado_recomendado')?>" class="btn btn-primary">Click Aquí</a>
            </div>
          </div>
        </div>

      </div> 

      <!-- Fila inferior con una card -->
      <div class="row fila-tarjetas">
        <div class="tarjetas col-md-6 ">
          <div class="card card-tarjetas">
            <!-- Icono de la card -->
            <i class="bi icono bi-question-circle"></i>
            <!-- Cuerpo de la card -->
            <div class="card-body">
              <h5 class="card-title">Preguntas frecuentes</h5>
              <p class="card-text">¿Tienes alguna duda sobre el producto, la página o los talles?</p>
              <!-- Botón para redirigir a las preguntas frecuentes -->
              <a href="<?= base_url('preguntas_frecuentes')?>" class="btn btn-primary">Click Aquí</a>
            </div>
          </div>
        </div>
      </div> 

    </div> 
</div> 
<?php echo $this->endSection(); ?>
   
