<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="public/assets/css/estilo_mensaje.css?v=1.3" rel="stylesheet" >
<?php echo $this->endSection(); ?>

<?php echo $this->section('contenido'); ?>

<div class="container mensaje-container">
    <h1><?= esc($titulo); ?></h1>
    
    <div class="mensaje-caja">
        <p class="mensaje-texto"><?= esc($mensaje); ?></p>
        
        <div class="mensaje-acciones">
            <a href="<?= base_url('login'); ?>" class="button-perfil">Iniciar Sesión</a>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
