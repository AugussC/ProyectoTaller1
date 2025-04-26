<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RetroManiacos</title>
    <!-- Estilos incluidos -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="public/assets/css/estiloprincipal.css?v=1.20" rel="stylesheet">
  </head>
  <body>

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
        <div class="carousel-inner">
          
          <!-- Primera diapositiva activa -->
          <div class="carousel-item active">
            <img src="public/assets/img/SomosRetroManiacos.png" alt="Imagen Carrusel 1">
            <div class="carousel-caption d-lg-block">
              <h5>▼RetroManiacos▼</h5>
              <p>La camiseta de tu sueño la encontrás acá</p>
            </div>
          </div>

          <!-- Segunda diapositiva -->
          <div class="carousel-item">
            <img src="public/assets/img/Enviosymas.png" alt="Imagen Carrusel 2">
            <div class="carousel-caption d-lg-block">
              <h5>Tu Compra, Más Fácil</h5>
              <p>Pagá en cuotas sin interés y recibí tu pedido sin cargo.</p>
            </div>
          </div>

          <!-- Tercera diapositiva -->
          <div class="carousel-item">
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
    </div>

    <!-- Sección de productos más vendidos -->
    <div class="container-fluid mas-vendidos bgcustom ">
      
      <!-- Título de la sección -->
      <h1>Mas vendidos</h1>
      
      <!-- Fila de productos -->
      <div class="row">
        
        <!-- Producto 1 -->
        <div class="producto-1 col-md-12 col-lg-3 ms-lg-5 me-lg-3 ">
          <!-- Tarjeta del producto 1 -->
          <div class="card">
            <!-- Imagen del producto -->
            <img src="public/assets/img/ImagenMasVendida1.jpg" class="img-producto-1" alt="Producto Mas Vendido 1">
            <!-- Contenido de la tarjeta -->
            <div class="card-body">
              <!-- Título del producto -->
              <h6 class="card-title">AC Milan 2006-07 Local</h6>
              <!-- Precio original tachado -->
              <p class="card-previous-price">$38.000</p>
              <!-- Precio con descuento -->
              <h5 class="card-price-now">$19.000 <span class="beneficios">50%OFF</span></h5>
              <!-- Información sobre cuotas -->
              <p class="beneficios">3 Cuotas sin interés de $6.333,33</p>
            </div>
          </div>
        </div>
        
        <!-- Producto 2 -->
        <div class="producto col-sm-6 col-md-3 col-lg-2">
          <!-- Tarjeta del producto 2 -->
          <div class="card">
            <!-- Imagen del producto -->
            <img src="public/assets/img/ImagenMasVendida2.jpg" class="img-producto" alt="Producto Mas Vendido 2">
            <!-- Contenido de la tarjeta -->
            <div class="card-body">
              <!-- Título del producto -->
              <h6 class="card-title">Schalke 04 1998-99 Local</h6>
              <!-- Precio original tachado -->
              <p class="card-previous-price">$40.000</p>
              <!-- Precio con descuento -->
              <h5 class="card-price-now">$26.000 <span class="beneficios">35%OFF</span></h5>
              <!-- Información sobre cuotas -->
              <p class="beneficios">3 Cuotas sin interés de $8.666,67</p>
            </div>
          </div>
        </div>
        
        <!-- Producto 3 -->
        <div class="producto col-sm-6 col-md-3 col-lg-2 ">
          <!-- Tarjeta del producto 3 -->
          <div class="card">
            <!-- Imagen del producto -->
            <img src="public/assets/img/ImagenMasVendida3.jpg" class="img-producto" alt="Producto Mas Vendido 3">
            <!-- Contenido de la tarjeta -->
            <div class="card-body">
              <!-- Título del producto -->
              <h6 class="card-title">Argentina 2006 Visitante</h6>
              <!-- Precio original tachado -->
              <p class="card-previous-price"> </p>
              <!-- Precio sin descuento (sin tachado) -->
              <h5 class="card-price-now">$25.810</h5><span class="beneficios"></span></h5>
              <!-- Información sobre cuotas -->
              <p class="beneficios">3 Cuotas sin interés de $8.603,33</p>
              <!-- Información adicional de envío -->
              <p class="beneficios"></p>
            </div>
          </div>
        </div>
        
        <!-- Producto 4 -->
        <div class="producto col-sm-6 col-md-3 col-lg-2">
          <!-- Tarjeta del producto 4 -->
          <div class="card">
            <!-- Imagen del producto -->
            <img src="public/assets/img/ImagenMasVendida4.jpg" class="img-producto" alt="Producto Mas Vendido 4">
            <!-- Contenido de la tarjeta -->
            <div class="card-body">
              <!-- Título del producto -->
              <h6 class="card-title">Alemania 1990 Local</h6>
              <!-- Precio original tachado -->
              <p class="card-previous-price"></p>
              <!-- Precio sin descuento (sin tachado) -->
              <h5 class="card-price-now">$39.000</h5><span class="beneficios"></span></h5>
              <!-- Información sobre cuotas -->
              <p class="beneficios">3 Cuotas sin interés de $13.300</p>
              <!-- Información adicional de envío -->
              <p class="beneficios">Envío gratis</p>
            </div>
          </div>
        </div>
        
        <!-- Producto 5 -->
        <div class="producto col-sm-6 col-md-3 col-lg-2 mb-3">
          <!-- Tarjeta del producto 5 -->
          <div class="card">
            <!-- Imagen del producto -->
            <img src="public/assets/img/ImagenMasVendida5.jpg" class="img-producto" alt="Producto Mas Vendido 5">
            <!-- Contenido de la tarjeta -->
            <div class="card-body">
              <!-- Título del producto -->
              <h6 class="card-title">Inter Milan 2001-02 Local</h6>
              <!-- Precio original tachado -->
              <p class="card-previous-price">$32.000</p>
              <!-- Precio con descuento -->
              <h5 class="card-price-now">$23.000 <span class="beneficios">28%OFF</span></h5>
              <!-- Información sobre cuotas -->
              <p class="beneficios">6 Cuotas sin interés de $3.833,33</p>
            </div>
          </div>
        </div>
      
      </div> 
      
    </div> 


    <!-- Sección: Ofertas del Día -->
    <div class="container-fluid seccion-ofertas bgcustom">
      <h1>Ofertas del Día</h1>

      <!-- Carrusel de Ofertas -->
      <div id="carouselOfertas" class="carousel slide">
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row producto-ofertas">
              <!-- Producto 1 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta1.jpg" class="img-producto" alt="Producto Más Vendido 1">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Boca Juniors 2001-02 Local</h6>
                    <p class="card-previous-price">$35.000</p>
                    <h5 class="card-price-now">$25.200 <span class="beneficios">28%OFF</span></h5>
                    <p class="beneficios">Pagando de Contado</p>
                    <p class="beneficios">Envío gratis</p>
                  </div>
                </div>
              </div>

              <!-- Producto 2 -->
              <div class= "col-6 col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta2.png" class="img-producto" alt="Producto Más Vendido 2">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">River Plate 2017-18 Local</h6>
                    <p class="card-previous-price">$22.000</p>
                    <h5 class="card-price-now">$20.900 <span class="beneficios">5%OFF</span></h5>
                    <p class="beneficios">3 Cuotas sin interés de $6.967</p>
                  </div>
                </div>
              </div>

              <!-- Producto 3 -->
              <div class="producto-visible-md col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta3.jpg" class="img-producto" alt="Producto Más Vendido 3">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Barcelona 2024-25 Local</h6>
                    <p class="card-previous-price">$21.000</p>
                    <h5 class="card-price-now">$19.000 <span class="beneficios">10%OFF</span></h5>
                    <p class="beneficios">6 Cuotas sin interés de $5.200</p>
                  </div>
                </div>
              </div>

              <!-- Producto 4 -->
              <div class="producto-visible-lg col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta4.jpg" class="img-producto" alt="Producto Más Vendido 4">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Liverpool FC 17-18 Local</h6>
                    <p class="card-previous-price">$24.500</p>
                    <h5 class="card-price-now">$22.540 <span class="beneficios">8%OFF</span></h5>
                    <p class="beneficios">Pagando de Contado</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row producto-ofertas">
              <!-- Producto 5 -->
              <div class=" col-6 col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta5.jpg" class="img-producto" alt="Producto Más Vendido 5">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Stade Brestois 21-22 Aniversario</h6>
                    <p class="card-previous-price">$42.500</p>
                    <h5 class="card-price-now">$36.125 <span class="beneficios">15%OFF</span></h5>
                    <p class="beneficios">Pagando de Contado</p>
                    <p class="beneficios">Envío gratis</p>
                  </div>
                </div>
              </div>

              <!-- Producto 6 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta6.png" class="img-producto" alt="Producto Más Vendido 6">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">UD Las Palmas 96-97 Local</h6>
                    <p class="card-previous-price">$39.000</p>
                    <h5 class="card-price-now">$31.200 <span class="beneficios">20%OFF</span></h5>
                    <p class="beneficios">6 cuotas sin interés de $5.200</p>
                  </div>
                </div>
              </div>

              <!-- Producto 7  -->
              <div class="producto-visible-md col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta7.jpg" class="img-producto" alt="Producto Más Vendido 7">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Strasbourg 78-79 Local</h6>
                    <p class="card-previous-price">$40.000</p>
                    <h5 class="card-price-now">$36.000<span class="beneficios"> 10%OFF</span></h5>
                    <p class="beneficios">3 Cuotas sin interés de $12.000</p>
                    <p class="beneficios">Envío gratis</p>
                  </div>
                </div>
              </div>

              <!-- Producto 8 -->
              <div class="producto-visible-lg col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta8.jpg" class="img-producto" alt="Producto Más Vendido 8">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Red Star Belgrade 98-99 Local</h6>
                    <p class="card-previous-price">$31.800</p>
                    <h5 class="card-price-now">$26.076 <span class="beneficios">18%OFF</span></h5>
                    <p class="beneficios">6 Cuotas sin interés de $4.346</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="row producto-ofertas">
              <!-- Producto 9 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta9.jpg" class="img-producto" alt="Producto Más Vendido 9">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Uruguay 2010 Local</h6>
                    <p class="card-previous-price">$33.500</p>
                    <h5 class="card-price-now">$28.475 <span class="beneficios">15%OFF</span></h5>
                    <p class="beneficios">6 Cuotas sin interés de $4.746</p>
                  </div>
                </div>
              </div>

              <!-- Producto 10 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta10.png" class="img-producto" alt="Producto Más Vendido 10">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">EE.UU. 2018 Local</h6>
                    <p class="card-previous-price">$38.000</p>
                    <h5 class="card-price-now">$19.000 <span class="beneficios">50%OFF</span></h5>
                    <p class="beneficios">3 Cuotas sin interés de $6.333,33</p>
                    <p class="beneficios">Envío gratis</p>
                  </div>
                </div>
              </div>

              <!-- Producto 11  -->
              <div class="producto-visible-md col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta11.jpg" class="img-producto" alt="Producto Más Vendido 11">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Real Betis 96-97 Local</h6>
                    <p class="card-previous-price">$25.000</p>
                    <h5 class="card-price-now">$22.540 <span class="beneficios">10%OFF</span></h5>
                    <p class="beneficios">Pagando de Contado</p>
                  </div>
                </div>
              </div>

              <!-- Producto 12  -->
              <div class="producto-visible-lg col-md-3 col-lg-2">
                <div class="card">
                  <div class="card-img-container">
                    <img src="public/assets/img/camiseta12.png" class="img-producto" alt="Producto Más Vendido 12">
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Stade Rennais 18-19 European Third</h6>
                    <p class="card-previous-price">$20.000</p>
                    <h5 class="card-price-now">$18.000 <span class="beneficios">10%OFF</span></h5>
                    <p class="beneficios">3 cuotas sin interés de $6.000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

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
    <div class="container-fluid container-jugador bgcustom">
      <div class="row productos-jugador">

        <!-- Card de Messi  -->
        <div class="card-jugador col-md-3">
          <div class="card no-border bgcustom">
            <!-- Imagen de Messi -->
            <img src="public/assets/img/lionelmessi.jpg" class="imagen-jugador" alt="Lionel Messi">
            <div class="titulo-card-jugador">
              <!-- Título con el nombre de Messi -->
              <h2>Lionel Messi</h2> 
            </div>
          </div>
        </div>

        <!-- Carrusel de productos  -->
        <div class="col-md-9">
          <div id="carouselMessi" class="carousel slide">
            <div class="carousel-inner">

              <!-- Slide 1 -->
              <div class="carousel-item active">
                <div class="row producto-jugador">
                  
                  <!-- Producto 1 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Messi1.jpg" class="img-producto" alt="Producto 1">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Argentina 2006 Local</h6>
                        <h5 class="card-price-now">$24.000</h5>
                        <p class="beneficios">6 Cuotas sin interés de $4.000</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 2 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Messi2.jpg" class="img-producto" alt="Producto 2">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Argentina 2008 Visitante</h6>
                        <p class="card-previous-price">$31.000</p>
                        <h5 class="card-price-now">$27.900 <span class="beneficios">10%OFF</span></h5>
                        <p class="beneficios">Pagando de Contado</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 3 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Messi3.jpg" class="img-producto" alt="Producto 3">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Barcelona 2008-09 Local</h6>
                        <p class="card-previous-price">$35.800</p>
                        <h5 class="card-price-now">$27.840 <span class="beneficios">22%OFF</span></h5>
                        <p class="beneficios">3 Cuotas sin interés de $9.280</p>
                        
                      </div>
                    </div>
                  </div>

                  <!-- Producto 4 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Messi4.jpg" class="img-producto" alt="Producto 4">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Barcelona 2011-12 Local</h6>
                        <h5 class="card-price-now">$33.000</h5>
                        <p class="beneficios">Pagando de Contado</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item">
                <div class="row producto-jugador">
                  
                  <!-- Producto 5 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Messi5 (2).jpg" class="img-producto" alt="Producto 5">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Paris Saint-Germain 2021-22 Local</h6>
                        <h5 class="card-price-now">$29.000</h5>
                        <p class="beneficios">Pagando de Contado</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 6 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Messi6.jpg" class="img-producto" alt="Producto 6">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Barcelona 2015-16 Local</h6>
                        <p class="card-previous-price">$28.000</p>
                        <h5 class="card-price-now">$25.200 <span class="beneficios">10%OFF</span></h5>
                        <p class="beneficios">6 Cuotas sin interés de $4.200</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 7 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Messi7.png" class="img-producto" alt="Producto 7">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Argentina 2014 World Cup Final</h6>
                        <h5 class="card-price-now">$35.000</h5>
                        <p class="beneficios">Pagando de Contado</p>
                        <p class="beneficios">Envío gratis</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 8 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Messi8.jpg" class="img-producto" alt="Producto 8">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Inter Miami 2024 Local</h6>
                        <p class="card-previous-price">$26.000</p>
                        <h5 class="card-price-now">$22.100 <span class="beneficios">15%OFF</span></h5>
                        <p class="beneficios">3 Cuotas sin interés de $7.366</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>

            <!-- Controles -->
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

    <!-- Sección: Card Maradona + Carrusel en la misma fila -->
    <div class="container-fluid container-jugador bgcustom">
      <div class="row productos-jugador">
        <!-- Imagen de Diego Maradona -->
        <div class="card-jugador col-md-3">
          <div class="card no-border bgcustom">
            <img src="public/assets/img/diegomaradona.jpg" class="imagen-jugador" alt="Diego Armando Maradona">
            <div class="titulo-card-jugador">
              <!-- titulo de la card -->
              <h2>Diego Armando Maradona</h2>
            </div>
          </div>
          </div>

        <!-- Carrusel de Productos de Maradona -->
        <div class="col-md-9">
          <div id="carouselMaradona" class="carousel slide">
            <div class="carousel-inner">

              <!-- Slide 1 -->
              <div class="carousel-item active">
                <div class="row producto-jugador">
                  
                  <!-- Producto 1 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Maradona.jpg" class="img-producto" alt="Producto 1">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Boca Jr 1981-82 Local</h6>
                        <p class="card-previous-price">$37.000</p>
                        <h5 class="card-price-now">$27.750 <span class="beneficios">25%OFF</span></h5>
                        <p class="beneficios">Pagando de Contado</p>
                        <p class="beneficios">Envío gratis</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 2 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Maradona2.jpg" class="img-producto" alt="Producto 2">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Barcelona 1982-83 Local</h6>
                        <p class="card-previous-price"></p>
                        <h5 class="card-price-now">$35.000</h5>
                        <p class="beneficios">3 Cuotas sin interés de $11.666</p>
                        <p class="beneficios">Envío gratis</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 3 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Maradona3.jpg" class="img-producto" alt="Producto 3">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Napoli 1984-85 Visitante</h6>
                        <p class="card-previous-price"></p>
                        <h5 class="card-price-now">$27.000</h5>
                        <p class="beneficios">Pagando de Contado</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 4 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Maradona4.jpg" class="img-producto" alt="Producto 4">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Napoli 1987-88 Local</h6>
                        <p class="card-previous-price"></p>
                        <h5 class="card-price-now">$32.850</h5>
                        <p class="beneficios">6 Cuotas sin interés de $5.475</p>
                        <p class="beneficios">Envío gratis</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item">
                <div class="row producto-jugador">

                  <!-- Producto 5 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Maradona5.jpg" class="img-producto" alt="Producto 5">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Boca Juniors 1995-96 Local</h6>
                        <p class="card-previous-price"></p>
                        <h5 class="card-price-now">$23.000</h5>
                        <p class="beneficios">6 Cuotas sin interés de $3.833</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 6 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Maradona6.jpg" class="img-producto" alt="Producto 6">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Argentina 1986 Local</h6>
                        <p class="card-previous-price">$37.000</p>
                        <h5 class="card-price-now">$31.450 <span class="beneficios">10%OFF</span></h5>
                        <p class="beneficios">Pagando de Contado</p>
                        <p class="beneficios">Envío gratis</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 7 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Maradona7.jpg" class="img-producto" alt="Producto 7">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Argentina 1993 Visitante</h6>
                        <p class="card-previous-price"></p>
                        <h5 class="card-price-now">$30.000</h5>
                        <p class="beneficios">Pagando de Contado</p>
                      </div>
                    </div>
                  </div>

                  <!-- Producto 8 -->
                  <div class="col-6 col-md-3 col-xl-2">
                    <div class="card">
                      <div class="card-img-container">
                        <img src="public/assets/img/Maradona8.jpg" class="img-producto" alt="Producto 8">
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Argentina 1994 Visitante</h6>
                        <p class="card-previous-price">$32.000</p>
                        <h5 class="card-price-now">$28.800 <span class="beneficios">10%OFF</span></h5>
                        <p class="beneficios">6 cuotas sin interés de $4.800</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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

    <!-- Script de Bootstrap  -->
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

