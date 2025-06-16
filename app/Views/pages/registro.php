<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?>
<link href="public/assets/css/estilo_registro.css?v=1.8" rel="stylesheet" >
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>
 
<div class="container ">
        <div class="card shadow-lg form-signin ">
            <div class="card-body">
                <h1>Registro</h1>
                <form method="POST" action="<?= base_url('register'); ?>" autocomplete="off">

                    <?= csrf_field(); ?>


                    <div class="formulario">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= set_value('nombre'); ?>" required autofocus>
                    </div>

                    <div class="formulario">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" value="<?= set_value('apellido'); ?>" required autofocus>
                    </div>

                    <div class="formulario">
                        <label  for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>" required>
                    </div>

                    <div class="formulario">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <div class="formulario">
                        <label for="repassword">Confirmar contraseña</label>
                        <input type="password" class="form-control" name="repassword" id="repassword" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Registrar
                    </button>
                </form>

                <?php if(session()->getFlashdata('errors')!== null) : ?>
                    <div class="alert alert-danger my-3" role="alert">
                        <?= session()->getFlashdata('errors'); ?>
                    </div>

                <?php endif; ?>

            </div>
            <div class="card-footer py-3 border-0">
                <div class="text-center">
                    <a href="<?= base_url('login');?>">Iniciar sesión</a>
                </div>
            </div>
        </div>
</div>

<?php echo $this->endSection(); ?> 