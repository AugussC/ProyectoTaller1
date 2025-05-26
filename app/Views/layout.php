

<?php 
$session = session(); 
$rol = $session->get('rol');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Título de la página que es generado dinámicamente por PHP -->
    <title> <?php echo esc($titulo); ?> </title>

    <!-- Enlace al archivo CSS de Bootstrap para el diseño responsivo y componentes -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Enlace a los iconos de Bootstrap desde una CDN externa -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Enlace al archivo de estilos personalizados para el navbar -->
    <link href="public/assets/css/estilonavbar.css?v=1.3" rel="stylesheet">
    
    <!-- Enlace al archivo de estilos personalizados para el footer -->
    <link href="public/assets/css/estilofooter.css?v=1.12" rel="stylesheet">

    <!-- Sección para insertar estilos adicionales definidos por el controlador en la vista -->
    <?php echo $this->renderSection("estilos"); ?> 
  </head>

  <body>
  <!-- Inclusión del componente de navbar utilizando PHP -->
    
  <?php if ($rol === 'admin'): ?>
      <?php echo $this->include("components/navbar_admin.php"); ?>
  <?php else: ?>
      <?php echo $this->include("components/navbar.php"); ?>
  <?php endif; ?>

  <!-- Sección dinámica para el contenido principal de la página -->
  <?php echo $this->renderSection("contenido"); ?>

  <!-- Inclusión del componente de footer utilizando PHP -->
  <?php echo $this->include("components/footer.php"); ?> 
  
  <!-- Enlace al archivo JS de Bootstrap que incluye funcionalidades como modales, menús desplegables, etc. -->
  <script src="public/assets/js/bootstrap.bundle.min.js"></script>

  <!-- Sección para insertar scripts adicionales definidos por el controlador en la vista -->
   <?php echo $this->renderSection("javascrip"); ?>
   
</body>
</html>
