<?= $this->extend('layout'); ?>

<?= $this->section('estilos'); ?>
<link href="<?= base_url('public/assets/css/estilo_productos.css') ?>" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('contenido'); ?>
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center"><?= esc($titulo) ?></h1>
     <?php if(session()->getFlashdata('errors')!== null) : ?>
                                    <div class="alert alert-danger my-3" role="alert">
                                        <?= session()->getFlashdata('errors'); ?>
                                    </div>

                                <?php endif; ?>
    <?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
    
<?php endif; ?>
<!-- Modal -->
            <!-- Botón que abre el modal -->
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalAgregarAdmin">
                Añadir Administrador
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalAgregarAdmin" tabindex="-1" aria-labelledby="modalAgregarAdminLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="<?= site_url('createAdmin') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAgregarAdminLabel">Añadir Administrador</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>

                            <?= csrf_field(); ?>    
                            
                            <div class="modal-body g-3">
                                <div class="mb-3">
                                    <label class="mb-2" for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2" for="apellido">Apellido</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2" for="email">Correo electrónico</label>
                                    <input type="email" class="form-control" name="email" id="email" value="" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Telefono</label>
                                    <input type="text" name="telefono" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>

                                <div class="mb-3">
                                    <label for="repassword">Confirmar contraseña</label>
                                    <input type="password" class="form-control" name="repassword" id="repassword" required>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar Administrador</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    <table class="table table-bordered table-striped">
        <thead class="table">
            <tr>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Activo</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= esc($usuario['id_usuario']) ?></td>
                        <td><?= esc($usuario['nombre']) ?></td>
                        <td><?= esc($usuario['apellido']) ?></td>
                        <td><?= esc($usuario['email']) ?></td>
                        <td><?= esc($usuario['rol']) ?></td>
                        <td><?= esc($usuario['activo']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No hay usuarios disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>