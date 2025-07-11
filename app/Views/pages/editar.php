<?= $this->extend('layout'); ?>

<?= $this->section('estilos'); ?>
<link href="<?= base_url('public/assets/css/estilo_editar.css?v=1') ?>" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('contenido'); ?>
<div class="container">
    <h1><?= esc($titulo) ?></h1>

        <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>
    <form action="<?= site_url('productos/actualizar/' . $producto['id_producto']) ?>" method="post" enctype="multipart/form-data" class="row g-3">

        <div class="col-md-6">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?= esc($producto['nombre']) ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Jugador Relevante</label>
            <input type="text" name="jugador_relevante" class="form-control" value="<?= esc($producto['jugador_relevante']) ?>">
        </div>

        <div class="col-md-6">
            <label class="form-label">Categoría (Equipo)</label>
            <select name="id_categoria" class="form-select" required>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id_categoria'] ?>" <?= $producto['id_categoria'] == $categoria['id_categoria'] ? 'selected' : '' ?>>
                        <?= esc($categoria['equipo']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Cuotas</label>
            <select name="cuotas" class="form-select" required>
                <option value="0" <?= $producto['cuotas'] == 0 ? 'selected' : '' ?>>Contado</option>
                <option value="3" <?= $producto['cuotas'] == 3 ? 'selected' : '' ?>>3 cuotas</option>
                <option value="6" <?= $producto['cuotas'] == 6 ? 'selected' : '' ?>>6 cuotas</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Precio</label>
            <input type="number" name="precio" class="form-control" min="0" step="0.01" value="<?= esc($producto['precio']) ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" min="1" value="<?= esc($producto['stock']) ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Precio con Descuento</label>
            <input type="number" name="precio_descuento" class="form-control" min="0" step="0.01" value="<?= esc($producto['precio_descuento']) ?>">
        </div>
        

        <div class="col-md-12">
            <label class="form-label">Imagen del Producto (dejar vacío para no cambiar)</label>
            <input type="file" name="ruta_imagen" class="form-control" accept="image/*">
        </div>

        <div class="col-md-12 text-end">
            <a href="<?= site_url('productos') ?>" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>

    </form>
</div>
<?= $this->endSection(); ?>