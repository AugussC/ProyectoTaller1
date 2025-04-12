<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <section class="container-fluid">
    <!-- Barra de navegación responsive -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <h2 class="text-center text-uppercase fw-bold mb-4">Galería de Imágenes</h2>
  <section class="container my-5">
  <section class="container my-5">
  <p class="mb-4 text-center text-uppercase fw-bold fst-italic">Este es el título principal</p>
  <p class="mb-3">Este es el segundo párrafo del contenido de la página. Está dentro de un container con márgenes aplicados.</p>
  <p class="mb-3">Este es el tercer párrafo, con un poco más de texto para ver cómo se comporta el diseño.</p>
  <p class="mb-3">Y este es el cuarto párrafo. Se pueden aplicar más estilos si lo necesitás.</p>
</section>

  <div id="carouselEjemplo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicadores -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselEjemplo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselEjemplo" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselEjemplo" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Imágenes del carrusel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/imagen1.jpg" class="d-block w-100" alt="Primera imagen">
      </div>
      <div class="carousel-item">
        <img src="img/imagen2.jpg" class="d-block w-100" alt="Segunda imagen">
      </div>
      <div class="carousel-item">
        <img src="img/imagen3.jpg" class="d-block w-100" alt="Tercera imagen">
      </div>
    </div>

    <!-- Controles de navegación -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEjemplo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselEjemplo" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</section>
<footer class="bg-dark text-white text-center py-3">
  <p class="mb-0">© 2025 Mi Sitio Web. Todos los derechos reservados.</p>
</footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

