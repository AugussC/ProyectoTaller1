<?php $session = session(); ?>

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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Menú de navegación principal -->
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mensajes de Consulta</a>
        </li>
      </ul>
      <!-- Botón de inicio de sesión alineado a la derecha -->
    <div class="d-flex ms-auto">
      <?php if (!$session->get('login_in')): ?>
        <!-- Usuario no logueado: mostrar botón para iniciar sesión -->
        <a href="<?= base_url('login') ?>" class="btn-icon btn-outline-primary"><i class="bi bi-person-circle"></i></a>
      <?php else: ?>
        <!-- Usuario logueado: mostrar menú desplegable -->
        <div class="dropdown">
          <button class="btn-icon btn-outline-primary dropdown-toggle" type="button" id="perfilDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="perfilDropdown">
            <li><a class="dropdown-item" href="<?= base_url('perfil') ?>">Tu perfil</a></li>
            <li><a class="dropdown-item" href="<?= base_url('facturas') ?>">Facturas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="<?= base_url('logout') ?>">Cerrar sesión</a></li>
          </ul>
        </div>
      <?php endif; ?>
    </div>

  </div>

</div>
</nav>
