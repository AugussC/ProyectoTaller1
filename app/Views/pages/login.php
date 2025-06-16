<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?>
<link href="public/assets/css/estilo_login.css?v=1.8" rel="stylesheet" >
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>


    <div class="container">
        <div class="card shadow-lg form-signin">
            <div class="card-body card-login">
                <h1>Iniciar sesión</h1>
                <form method="POST" action="<?= base_url('auth'); ?>" autocomplete="off">

                    <?= csrf_field(); ?>
                    <div class="formulario">
                        <label  for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required autofocus>
                    </div>

                    <div class="formulario">
                        <div class="label-pasword">
                            <label for="password">Contraseña</label>
                            <a href="link_request.html" class="float-end">
                                Olvide mi contraseña
                            </a>
                            
                        </div>
                        <input type="password" class="form-control" name="password" id="password" required >
                        
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Ingresar
                    </button>
                </form>

                <?php if(session()->getFlashdata('errors')!== null) : ?>
                    <div class="alert alert-danger alert-login" role="alert">
                        <?= session()->getFlashdata('errors'); ?>
                    </div>

                <?php endif; ?>
            </div>
            <div class="card-footer">
                <div class="mensaje-registro">
                    ¿No tienes una cuenta? <a href="<?= base_url('register') ?>" class="text-dark">Registrate aquí</a>
                </div>
            </div>
        </div>
    </div>


<?php echo $this->endSection(); ?> 