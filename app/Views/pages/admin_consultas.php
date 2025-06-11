<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?>
<link href="public/assets/css/estilo_consultas.css?v=2.3" rel="stylesheet">
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>
<div class="conteiner capa-beige">
    <h1>Panel de Consultas y Contactos</h1>

    <!-- CONSULTAS -->
    <section>
        <h2>Consultas de Usuarios</h2>
        <?php if (!empty($consultas)): ?>
            <?php foreach ($consultas as $consulta): ?>
                <?php
                    $telefono = isset($consulta['telefono']) && $consulta['telefono'] != '0' ? esc($consulta['telefono']) : '-';
                ?>
                <div class="notificacion">
                    <div class="notificacion-header">
                        <div class="datos-usuario">
                            <strong><?= esc($consulta['nombre']) ?> <?= esc($consulta['apellido']) ?></strong><br>
                            Email: <?= esc($consulta['email']) ?><br>
                            Teléfono: <?= $telefono ?>
                        </div>
                        <a href="<?= base_url('marcarleido/consulta/' . $consulta['id_consulta']) ?>"><button class=" btn-check-icon " type="submit" title="Marcar como revisado">
                            <i class="bi bi-check-lg"></i>
                        </button></a>
                        

                    </div>
                    <div class="mensaje"><?= esc($consulta['mensaje']) ?></div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <div class="no-data">No hay consultas registradas.</div>
        <?php endif; ?>
    </section>

    <!-- CONTACTOS -->
    <section>
        <h2>Mensajes de Contacto (No Registrados)</h2>
        <?php if (!empty($contactos)): ?>
            <?php foreach ($contactos as $contacto): ?>
                <?php
                    $telefono = isset($contacto['telefono']) && $contacto['telefono'] != '0' ? esc($contacto['telefono']) : '-';
                ?>
                <div class="notificacion">
                    <div class="notificacion-header">
                        <div class="datos-usuario">
                            <strong><?= esc($contacto['nombre']) ?> <?= esc($contacto['apellido']) ?></strong><br>
                            Email: <?= esc($contacto['email']) ?><br>
                            Teléfono: <?= $telefono ?>
                        </div>
                        <a href="<?= base_url('marcarleido/contacto/' . $contacto['id_contacto']) ?>"><button class=" btn-check-icon " type="submit" title="Marcar como revisado">
                            <i class="bi bi-check-lg"></i>
                        </button></a>
                    </div>
                    <div class="mensaje"><?= esc($contacto['mensaje']) ?></div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <div class="no-data">No hay contactos registrados.</div>
        <?php endif; ?>
    </section>
</div>
<?= $this->endSection(); ?>