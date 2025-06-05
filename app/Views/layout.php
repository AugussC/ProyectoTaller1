<?php 
$session = session(); 
$rol = $session->get('rol');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= esc($titulo); ?> </title>

    <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="<?= base_url('public/assets/css/estilonavbar.css?v=1.3') ?>" rel="stylesheet">
    <link href="<?= base_url('public/assets/css/estilofooter.css?v=1.12') ?>" rel="stylesheet">

    <?= $this->renderSection("estilos"); ?> 
  </head>

  <body>
    <?php if ($rol === 'admin'): ?>
        <?= $this->include("components/navbar_admin.php"); ?>
    <?php else: ?>
        <?= $this->include("components/navbar.php"); ?>
    <?php endif; ?>

    <?= $this->renderSection("contenido"); ?>

    <?php if ($rol !== 'admin'): ?>
        <?= $this->include("components/footer.php"); ?> 
    <?php endif; ?>

    <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <?= $this->renderSection("javascrip"); ?>
  </body>
</html>
