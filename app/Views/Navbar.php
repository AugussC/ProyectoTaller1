<link href="public/assets/css/estilonavbar.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('inicio')?>"><img src="public/assets/img/LogoRetromaniacos.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-center">
    RetroManiacos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-3 me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('quienes_somos')?>">¿Quienes Somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('comercializacion')?>">Comercializacion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('contactos')?>">Contactos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('terminos')?>">Terminos</a>
        </li>
      </ul>
      <form class="d-flex ms-2 mb-2 align-items-center" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
      
      <button class="btn-icon me-2" type="button">
        <i class="bi bi-search"></i>
      </button>
      
      <button class="btn-icon me-2" type="button">
        <i class="bi bi-person-circle"></i>
      </button>
      
      <button class="btn-icon" type="button">
        <i class="bi bi-cart"></i>
      </button>
    </form> 
    </div>
  </div>
</nav>
