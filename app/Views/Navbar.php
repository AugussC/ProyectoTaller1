<!-- Estilos personalizados para el navbar -->
<link href="public/assets/css/estilonavbar.css?v=1.3" rel="stylesheet">

<!-- Íconos de Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Navbar principal -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">

    <!-- Logo y nombre de la marca -->
    <a class="navbar-brand" href="<?= base_url('inicio') ?>">
      <img src="public/assets/img/LogoRetromaniacos.png" alt="Logo">
      RetroManiacos
    </a>

    <!-- Botón hamburguesa para pantallas pequeñas -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú colapsable -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-lg-0">

        <!-- Menú de navegación principal -->
        <!-- Catalogo -->
         <!--
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Catálogo</a>
        </li>
       -->

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('quienes_somos') ?>">¿Quiénes Somos?</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('comercializacion') ?>">Comercialización</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('contactos') ?>">Contactos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('terminos') ?>">Términos</a>
        </li>
      </ul>

      <!-- Sección de búsqueda e iconos-->
     <!--
      <form class="formulario" role="search">
        <input class="form-control" type="search" placeholder="Buscar..." aria-label="Buscar">
        
        <button class="btn-icon" type="button">
          <i class="bi bi-search"></i>
        </button>
        
        <button class="btn-icon" type="button">
          <i class="bi bi-person-circle"></i>
        </button>
        
        <button class="btn-icon" type="button">
          <i class="bi bi-cart"></i>
        </button>
      </form>
      -->
    </div>
  </div>
</nav>
