<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RetroManiacos</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/estiloprincipal.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <?php include 'navbar.php'; ?>

      <div class="container mt-5 pt-4">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/Carrusel1.jpeg" class="d-block w-100" alt="ejemplo 1">
              <div class="carousel-caption d-none d-md-block">
                <h5>▼RetroManiacos▼</h5>
                <p>La camiseta de tu sueño la encontrás acá</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/Carrusel2.jpeg" class="d-block w-100" alt="ejemplo 2">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/Carrusel3.jpg" class="d-block w-100" alt="ejemplo 3">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          </div>
      </div>


      <div class="container-fluid bgcustom my-5 text-center">
        <h1>Mas vendidos</h1>
          <div class="row">
              <!-- Producto 1 -->
            <div class="col-md-12 col-lg-3 ms-0 ms-lg-5 me-0 me-lg-3 mb-3">
            <div class="card h-100">
              <img src="assets/img/ImagenMasVendida1.jpg" class="card-img-top" alt="Producto Mas Vendido 1">
              <div class="card-body">
                <h6 class="card-title">AC Milan 2006-07 Local</h6>
                <p class="text-muted text-decoration-line-through">$38000</p>
                <h5 class="text-success">$19000 <span class="text-success small">50% OFF</span></h5>
                <p class="text-success small">3 Cuotas sin interes de $6.333,33</p>
                <p class="text-success small">Envío gratis superando los $35.000</p>
              </div>
            </div>
          </div>
              <!-- Producto 2 -->
          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <div class="card h-100">
              <img src="assets/img/ImagenMasVendida2.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 2">
              <div class="card-body">
                <h6 class="card-title">Schalke 04 1998-99 Local</h6>
                <p class="text-muted text-decoration-line-through">$40.000</p>
                <h5 class="text-success">$26.000 <span class="text-success small">35% OFF</span></h5>
                <p class="text-success small">3 Cuotas sin interes de $8.666,67</p>
                <p class="text-success small">Envío gratis superando los $35.000</p>
              </div>
            </div>
          </div>
          <!-- Producto 3 -->
          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <div class="card h-100">
              <img src="assets/img/ImagenMasVendida3.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 3">
              <div class="card-body">
                <h6 class="card-title">Camiseta Visitante Argentina 2006</h6>
                <p class="text-muted text-decoration-line-through"></p>
                <h5 class="text-success">$25.810</h5>
                <p class="text-success small">3 Cuotas sin interes de $8.603,33</p>
                <p class="text-success small">Envío gratis superando los $35.000</p>
              </div>
            </div>
          </div>
          <!-- Producto 4 -->
          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <div class="card h-100">
              <img src="assets/img/ImagenMasVendida4.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 4">
              <div class="card-body">
                <h6 class="card-title">Alemania 1990 Local</h6>
                <p class="text-muted text-decoration-line-through"></p>
                <h5 class="text-success">$39.000</h5>
                <p class="text-success small">3 Cuotas sin interes de $13.300</p>
                <p class="text-success small">Envío gratis</p>
              </div>
            </div>
          </div>
          <!-- Producto 5 -->
          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <div class="card h-100">
              <img src="assets/img/ImagenMasVendida5.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 5">
              <div class="card-body">
                <h6 class="card-title">Camiseta Local Inter Milan 2001-02</h6>
                <p class="text-muted text-decoration-line-through">$32.000</p>
                <h5 class="text-success">$23.000 <span class="text-success small">28% OFF</span></h5>
                <p class="text-success small">6 Cuotas sin interes de $3.833,33</p>
                <p class="text-success small">Envío gratis superando los $35.000</p>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Sección: Ofertas del Día -->
        <div class="container-fluid bgcustom py-4 text-center">
          <h1>Ofertas del Día</h1>

          <div id="carouselOfertas" class="carousel slide">
            <div class="carousel-inner">

              <!-- Slide 1 -->
              <div class="carousel-item active">
                <div class="row justify-content-center text-center flex-nowrap overflow-hidden">
                  <div class="col-6 col-md-3 col-lg-2">
                  <div class="card h-100">
                    <img src="assets/img/camiseta1.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
                    <div class="card-body">
                      <h6 class="card-title">Boca Juniors 2001-02 Local</h6>
                      <p class="text-muted text-decoration-line-through">$28.000</p>
                      <h5 class="text-success">$25.200 <span class="text-success small">10% OFF</span></h5>
                      <p class="text-success small">Pagando de Contado</p>
                      <p class="text-success small">Envío gratis superando los $35.000</p>
                    </div>
                  </div>
                  </div>
                  <div class="col-6 col-md-3 col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta2.png" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
                      <div class="card-body">
                        <h6 class="card-title">River Plate 2017-18 Local</h6>
                        <p class="text-muted text-decoration-line-through">$22.000</p>
                        <h5 class="text-success">$20.900 <span class="text-success small">5% OFF</span></h5>
                        <p class="text-success small">3 Cuotas sin interés de $6.967</p>
                        <p class="text-success small">Envío gratis superando los $35.000</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block col-md-3 col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta3.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
                    <div class="card-body">
                      <h6 class="card-title">Barcelona 2024-25 Local</h6>
                      <p class="text-muted text-decoration-line-through">$21.000</p>
                      <h5 class="text-success">$19.000 <span class="text-success small">10% OFF</span></h5>
                      <p class="text-success small">6 Cuotas sin interés de $5.200</p>
                      <p class="text-success small">Envío gratis superando los $35.000</p>
                    </div>
                  </div>
                  </div>
                  <div class="d-none d-lg-block col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta4.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
                    <div class="card-body">
                      <h6 class="card-title">Liverpool FC 17-18 Local</h6>
                      <p class="text-muted text-decoration-line-through">$24.500</p>
                      <h5 class="text-success">$22.540 <span class="text-success small">8% OFF</span></h5>
                      <p class="text-success small">Pagando de Contado</p>
                      <p class="text-success small">Envío gratis superando los $35.000</p>
                        </div>
                </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item">
                <div class="row justify-content-center text-center flex-nowrap overflow-hidden">
                  <div class="col-6 col-md-3 col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta5.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
              <div class="card-body">
                <h6 class="card-title">Stade Brestois 21-22 Aniversario</h6>
                <p class="text-muted text-decoration-line-through">$42.500</p>
                <h5 class="text-success">$36.125 <span class="text-success small">15% OFF</span></h5>
                <p class="text-success small">6 Cuotas sin interes de $6.021</p>
                <p class="text-success small">Envío gratis</p>
              </div>
            </div>
                  </div>
                  <div class="col-6 col-md-3 col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta6.png" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
              <div class="card-body">
                <h6 class="card-title">UD Las Palmas 96-97 Local</h6>
                <p class="text-muted text-decoration-line-through">$39.000</p>
                <h5 class="text-success">$31.200 <span class="text-success small">20% OFF</span></h5>
                <p class="text-success small">6 cuotas sin interés de $5.200</p>
                <p class="text-success small">Envío gratis superando los $35.000</p>
              </div>
            </div>
                  </div>
                  <div class="d-none d-md-block col-md-3 col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta7.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
              <div class="card-body">
                <h6 class="card-title">Strasbourg 78-79 Local</h6>
                <p class="text-muted text-decoration-line-through">$40.000</p>
                <h5 class="text-success">$36.000<span class="text-success small">10% OFF</span></h5>
                <p class="text-success small">3 Cuotas sin interes de $12.000</p>
                <p class="text-success small">Envío gratis</p>
              </div>
            </div>
                  </div>
                  <div class="d-none d-lg-block col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta8.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
              <div class="card-body">
                <h6 class="card-title">Red Star Belgrade 98-99 Local</h6>
                <p class="text-muted text-decoration-line-through">$31.800</p>
                <h5 class="text-success">$26.076 <span class="text-success small"> 18% OFF</span></h5>
                <p class="text-success small">6 Cuotas sin interés de $4.346</p>
                <p class="text-success small">Envío gratis superando los $35.000</p>
              </div>
            </div>
                  </div>
                </div>
              </div>
              <!-- Slide 1 -->
              <div class="carousel-item">
                <div class="row justify-content-center text-center flex-nowrap overflow-hidden">
                  <div class="col-6 col-md-3 col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta9.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
                    <div class="card-body">
                      <h6 class="card-title">Uruguay 2010 Local</h6>
                      <p class="text-muted text-decoration-line-through">$33.500</p>
                      <h5 class="text-success">$28.475 <span class="text-success small">15% OFF</span></h5>
                      <p class="text-success small">6 Cuotas sin interés de $4.746</p>
                      <p class="text-success small">Envío gratis superando los $35.000</p>
                    </div>
                  </div>
                  </div>
                  <div class="col-6 col-md-3 col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta10.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
                      <div class="card-body">
                        <h6 class="card-title">EE.UU. 2018 Local</h6>
                        <p class="text-muted text-decoration-line-through">$38.000</p>
                        <h5 class="text-success">$19.000 <span class="text-success small">50% OFF</span></h5>
                        <p class="text-success small">3 Cuotas sin interes de $6.333,33</p>
                        <p class="text-success small">Envío gratis superando los $35.000</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block col-md-3 col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta11.jpg" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
                    <div class="card-body">
                      <h6 class="card-title">Real Betis 96-97 Local</h6>
                      <p class="text-muted text-decoration-line-through">$25.000</p>
                      <h5 class="text-success">$22.540 <span class="text-success small">10% OFF</span></h5>
                      <p class="text-success small">Pagando de Contado</p>
                      <p class="text-success small">Envío gratis superando los $35.000</p>
                    </div>
                  </div>
                  </div>
                  <div class="d-none d-lg-block col-lg-2">
                  <div class="card h-100">
                  <img src="assets/img/camiseta12.png" class="card-img-top img-producto" alt="Producto Mas Vendido 1">
                    <div class="card-body">
                      <h6 class="card-title">Stade Rennais 18-19 European Third</h6>
                      <p class="text-muted text-decoration-line-through">$20.000</p>
                      <h5 class="text-success">$18.000 <span class="text-success small">10% OFF</span></h5>
                      <p class="text-success small">3 cuotas sin interés de $6.000</p>
                      <p class="text-success small">Envío gratis superando los $35.000</p>
                        </div>
                </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- Controles -->
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

        



      <!-- Seccion: Card Messi + Carrusel en la misma fila -->
      <div class="container-fluid bgcustom my-5 py-4">
  <div class="row align-items-center g-4">
    
    <!-- Card a la izquierda -->
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card border-0" style="width: 18rem;">
        <img src="assets/img/lionelmessi.jpg" class="card-img-top rounded-circle img-fluid" alt="Lionel Messi">
        <div class="card-body text-center">
          <h2>Lionel Messi</h2>
        </div>
      </div>
    </div>

    <!-- Carrusel a la derecha -->
    <div class="col-md-9">
      <div id="carouselMessi" class="carousel slide">
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row justify-content-center text-center flex-nowrap overflow-hidden">
              <!-- Producto 1 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Messi1.jpg" class="card-img-top  img-producto" alt="Producto 1">
                  <div class="card-body">
                    <h6 class="card-title">Argentina 2006 Local</h6>
                    <p class="text-muted text-decoration-line-through"></p>
                    <h5 class="text-success">$24.000 </h5>
                    <p class="text-success small">6 Cuotas sin interés de $4.000</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
              <!-- Producto 2 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Messi2.jpg" class="card-img-top img-producto" alt="Producto 2">
                  <div class="card-body">
                    <h6 class="card-title">Argentina 2008 Visitante</h6>
                    <p class="text-muted text-decoration-line-through">$31.000</p>
                    <h5 class="text-success">$27.900 <span class="small">10% OFF</span></h5>
                    <p class="text-success small">Pagando de Contado</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
              <!-- Producto 3 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Messi3.jpg" class="card-img-top img-producto" alt="Producto 2">
                  <div class="card-body">
                    <h6 class="card-title">Barcelona 2008-09 Local</h6>
                    <p class="text-muted text-decoration-line-through">$34.800</p>
                    <h5 class="text-success">$27.840 <span class="small">20% OFF</span></h5>
                    <p class="text-success small">3 Cuotas sin interés de $9.280</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
              <!-- Producto 4 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Messi4.jpg" class="card-img-top img-producto" alt="Producto 3">
                  <div class="card-body">
                    <h6 class="card-title">Barcelona 2011-12 Local</h6>
                    <p class="text-muted text-decoration-line-through"></p>
                    <h5 class="text-success">$33.000</h5>
                    <p class="text-success small">Pagando de Contado</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row justify-content-center text-center flex-nowrap overflow-hidden">
              <!-- Producto 4 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Messi5.png" class="card-img-top img-producto" alt="Producto 4">
                  <div class="card-body">
                    <h6 class="card-title">Argentina 2014 World Cup Final</h6>
                    <p class="text-muted text-decoration-line-through"></p>
                    <h5 class="text-success">$35.000 </h5>
                    <p class="text-success small">6 Cuotas sin interés de $5.833,33</p>
                    <p class="text-success small">Envío gratis</p>
                  </div>
                </div>
              </div>
              <!-- Producto 6 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Messi6.jpg" class="card-img-top img-producto" alt="Producto 5">
                  <div class="card-body">
                    <h6 class="card-title">Barcelona 2015-16 Local</h6>
                    <p class="text-muted text-decoration-line-through">$28.000</p>
                    <h5 class="text-success">$25.200 <span class="small">10% OFF</span></h5>
                    <p class="text-success small">6 Cuotas sin interés de $4.200</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
              <!-- Producto 7 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Messi7.jpg" class="card-img-top img-producto" alt="Producto 5">
                  <div class="card-body">
                    <h6 class="card-title">Paris Saint-Germain 2021-22 Local</h6>
                    <p class="text-muted text-decoration-line-through"></p>
                    <h5 class="text-success">$29.000</h5>
                    <p class="text-success small">Pagando de Contado</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
              <!-- Producto 8 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Messi8.jpg" class="card-img-top img-producto" alt="Producto 6">
                  <div class="card-body">
                    <h6 class="card-title">Inter Miami 2024 Local</h6>
                    <p class="text-muted text-decoration-line-through">$26.000</p>
                    <h5 class="text-success">$22.100 <span class="small">15% OFF</span></h5>
                    <p class="text-success small">3 Cuotas sin interés de $7.366</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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



      <!-- SecciÃ³n: Card Maradona + Carrusel en la misma fila -->
      <div class="container-fluid bgcustom my-5 py-4">
        <div class="row align-items-center">
          <!-- Card a la izquierda -->
          <div class="col-md-3 d-flex justify-content-center mb-4 mb-md-0">
            <div class="card.no-border" style="width: 18rem; ">
              <img src="assets/img/diegomaradona.jpg" class="card-img-top rounded-circle" alt="...">
              <div class="card-body text-center">
                <h2 class="card-text">Diego Armando Maradona</h2>
              </div>
            </div>
          </div>

          <!-- Carrusel a la derecha -->
          <div class="col-md-9">
      <div id="carouselMaradona" class="carousel slide">
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="row justify-content-center text-center flex-nowrap overflow-hidden">
              <!-- Producto 1 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Maradona.jpg" class="card-img-top img-producto" alt="Producto 1">
                  <div class="card-body">
                    <h6 class="card-title">Boca Juniors 1981-82 Camiseta Local</h6>
                    <p class="text-muted text-decoration-line-through">$37.000</p>
                    <h5 class="text-success">$27.750 <span class="small">25% OFF</span></h5>
                    <p class="text-success small">Pagando de Contado</p>
                    <p class="text-success small">Envío gratis</p>
                  </div>
                </div>
              </div>
              <!-- Producto 2 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Maradona2.jpg" class="card-img-top img-producto" alt="Producto 2">
                  <div class="card-body">
                    <h6 class="card-title">Barcelona 1982-83 Local</h6>
                    <p class="text-muted text-decoration-line-through"></p>
                    <h5 class="text-success">$35.000</h5>
                    <p class="text-success small">3 Cuotas sin interés de $11.666</p>
                    <p class="text-success small">Envío gratis</p>
                  </div>
                </div>
              </div>
              <!-- Producto 3 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Maradona3.jpg" class="card-img-top img-producto" alt="Producto 2">
                  <div class="card-body">
                    <h6 class="card-title">Napoli 1984-85 Visitante</h6>
                    <p class="text-muted text-decoration-line-through"></p>
                    <h5 class="text-success">$27.000 </h5>
                    <p class="text-success small">Pagando de Contado</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
              <!-- Producto 4 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Maradona4.jpg" class="card-img-top img-producto" alt="Producto 3">
                  <div class="card-body">
                    <h6 class="card-title">Napoli 1987-88 Local</h6>
                    <p class="text-muted text-decoration-line-through">$36.500</p>
                    <h5 class="text-success">$32.850 <span class="small">10% OFF</span></h5>
                    <p class="text-success small">6 Cuotas sin interés de $5.475</p>
                    <p class="text-success small">Envío gratis</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="row justify-content-center text-center flex-nowrap overflow-hidden">
              <!-- Producto 4 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Maradona5.jpg" class="card-img-top img-producto" alt="Producto 4">
                  <div class="card-body">
                    <h6 class="card-title">Boca Juniors 1995-96 Local</h6>
                    <p class="text-muted text-decoration-line-through"></p>
                    <h5 class="text-success">$23.000 </h5>
                    <p class="text-success small">6 Cuotas sin interés de $3.833</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
              <!-- Producto 6 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Maradona6.jpg" class="card-img-top img-producto" alt="Producto 5">
                  <div class="card-body">
                    <h6 class="card-title">Argentina 1986 Local</h6>
                    <p class="text-muted text-decoration-line-through">$37.000</p>
                    <h5 class="text-success">$31.450 <span class="small">10% OFF</span></h5>
                    <p class="text-success small">3 Cuotas sin interés de $10.483</p>
                    <p class="text-success small">Envío gratis</p>
                  </div>
                </div>
              </div>
              <!-- Producto 7 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Maradona7.jpg" class="card-img-top img-producto" alt="Producto 5">
                  <div class="card-body">
                    <h6 class="card-title">Argentina 1993 Visitante</h6>
                    <p class="text-muted text-decoration-line-through"></p>
                    <h5 class="text-success">$30.000</h5>
                    <p class="text-success small">Pagando de Contado</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
              <!-- Producto 8 -->
              <div class="col-6 col-md-3 col-lg-2">
                <div class="card h-100">
                  <img src="assets/img/Maradona8.jpg" class="card-img-top img-producto" alt="Producto 6">
                  <div class="card-body">
                    <h6 class="card-title">Argentina 1994 Visitante</h6>
                    <p class="text-muted text-decoration-line-through">$32.000</p>
                    <h5 class="text-success">$28.800 <span class="small">10% OFF</span></h5>
                    <p class="text-success small">6 cuotas sin interés de $4.800</p>
                    <p class="text-success small">Envío gratis superando los $35.000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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

      <div class="container-fluid bgcustom my-5 py-5">
  <!-- Fila superior con dos cards -->
  <div class="row justify-content-center mb-4">
    <div class="col-md-5 d-flex justify-content-center mb-2 mb-md-0">
    <div class="card" style="width: 40rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-md-5 d-flex justify-content-center mb-2 mb-md-0">
    <div class="card" style="width: 40rem;">
  <img src="<i class="bi bi-box-seam-fill"></i>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>

  <!-- Fila inferior con una card centrada -->
  <div class="row justify-content-center mt-4">
    <div class="col-md-6 d-flex justify-content-center">
    <div class="card" style="width: 40rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
</div>
</div>
<!-- Pie de pagina -->
<?php include 'footer.php'; ?>

      
        
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

