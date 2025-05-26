<?php echo $this->extend('layout'); ?>

<?php echo $this->section('contenido'); ?>
 

        <div class="card shadow-lg form-signin pt-5 mt-5">
            <div class="card-body p-5">
                <h1 class="fs-4 card-title fw-bold mb-4"><?= $titulo; ?></h1>
            </div>
        </div>

        <p><?= $mensaje; ?></p>
        
        <div class="f-flex align-items-center">
            <a href="<?= base_url(); ?>" class="btn btn-primary ms-auto"> 
                Iniciar Sesión
            </a>
        </div>
<?php echo $this->endSection(); ?> 