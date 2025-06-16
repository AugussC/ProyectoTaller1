<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="public/assets/css/estilo_perfil.css?v=1.5" rel="stylesheet" >
<?php echo $this->endSection(); ?>

<?php echo $this->section('contenido'); ?>
<div class="container">
    <h1>Perfil de Usuario</h1>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="error">
            <?= session()->getFlashdata('errors') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="mensaje">
            <?= session()->getFlashdata('mensaje') ?>
        </div>
    <?php endif; ?>

    <form method="post" action="usuario/guardar_cambios">
        <?= csrf_field() ?>
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?= set_value('nombre', $usuario['nombre'] ?? '');  ?>" disabled><br><br>

        <label>Apellido:</label><br>
        <input type="text" name="apellido" value="<?= set_value('apellido', $usuario['apellido'] ?? ''); ?>" disabled><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= set_value('email', $usuario['email'] ?? ''); ?>" disabled><br><br>

        <label>Teléfono:</label><br>
        <input type="text" name="telefono" value="<?= set_value('telefono', $usuario['telefono'] ?? ''); ?>" disabled><br><br>

        <label>Dirección:</label><br>
        <input type="text" name="direccion" value="<?= set_value('direccion', $usuario['direccion'] ?? ''); ?>" disabled><br><br>

        <button class="button-perfil" type="submit" id="guardarBtn" disabled>Guardar Cambios</button>
    </form>

    <button class="button-perfil" onclick="habilitarCampos()">Actualizar</button>
    <button class="button-perfil" onclick="mostrarCambioContrasena()">Cambiar Contraseña</button>

    <div id="formContrasena" class="formulario-contraseña">
        <form method="post" action="usuario/cambiar_password">
            <label>Nueva Contraseña:</label><br>
            <input type="password" name="nueva_password" required><br><br>
            <button type="submit">Guardar Contraseña</button>
        </form>
    </div>

</div>
<?php echo $this->endSection(); ?> 

<?php echo $this->section('javascrip'); ?> 
<script src="public/assets/js/perfil.js"></script>
<?php echo $this->endSection(); ?>