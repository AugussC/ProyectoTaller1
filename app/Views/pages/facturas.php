<?php echo $this->extend('layout'); ?>

    <?php echo $this->section('estilos'); ?>
    <link href="public/assets/css/estilo_facturas.css?v=1.4" rel="stylesheet" >
    <?php echo $this->endSection(); ?> 

    <?php echo $this->section('contenido'); ?>
    <!-- Contenedor principal -->
    <div class="container-preguntas">
   
        <!-- Título principal centrado -->
        <h1>Tus Facturas:</h1>
        <h1>-------------------------</h1>
    <?php echo $this->endSection(); ?> 
