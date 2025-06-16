<?= $this->extend('layout'); ?>

<?= $this->section('estilos'); ?>
<link href="<?= base_url('public/assets/css/estilo_productos.css?v=1.4') ?>" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('contenido'); ?>
<div class="container">
    <h1><?= esc($titulo) ?></h1>

    <!-- Botones superiores -->
    <div class="boton-superior">
        <a href="<?= site_url('productos/eliminados') ?>" class="btn btn-secondary">Ver eliminados</a>
        
        <!-- Modal -->
            <!-- Botón que abre el modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAgregarProducto">
                Añadir producto
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalAgregarProducto" tabindex="-1" aria-labelledby="modalAgregarProductoLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="<?= site_url('productos/crear') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAgregarProductoLabel">Añadir Producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>

                            <div class="modal-body row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Jugador Relevante</label>
                                    <input type="text" name="jugador_relevante" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Categoría (Equipo)</label>
                                    <select name="id_categoria" id="categoriaSelect" class="form-select" required>
                                        <option value="">-- Selecciona una categoría --</option>
                                        <?php foreach ($categorias as $categoria): ?>
                                            <option value="<?= $categoria['id_categoria'] ?>"><?= esc($categoria['equipo']) ?></option>
                                        <?php endforeach; ?>
                                        <option value="nueva">+ Agregar nueva categoría</option>
                                    </select>
                                </div>

                                <div class="col-md-6 d-none" id="nuevaCategoriaDiv">
                                    <label class="form-label">Nueva Categoría (Equipo)</label>
                                    <input type="text" name="nueva_categoria" id="nuevaCategoriaInput" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Cuotas</label>
                                    <select name="cuotas" class="form-select" required>
                                        <option value="0">Contado</option>
                                        <option value="3">3 cuotas</option>
                                        <option value="6">6 cuotas</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Precio</label>
                                    <input type="number" name="precio" class="form-control" min="0" step="0.01" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Stock</label>
                                    <input type="number" name="stock" class="form-control" min="1" required>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Imagen del Producto</label>
                                    <input type="file" name="ruta_imagen" class="form-control" accept="image/*" required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar Producto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </div>

    <table class="table table-bordered table-striped">
        <thead class="table">
            <tr>
                <th>ID Producto</th>
                <th>Nombre</th>
                <th>Equipo</th>
                <th>Stock</th>
                <th>Acciones</th> <!-- Nueva columna -->
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($lista_productos)): ?>
                <?php foreach ($lista_productos as $producto): ?>
                    <tr>
                        <td><?= esc($producto['id_producto']) ?></td>
                        <td><?= esc($producto['nombre']) ?></td>
                        <td><?= esc($producto['equipo']) ?></td>
                        <td><?= esc($producto['stock']) ?></td>
                        <td>
                            <a href="<?= site_url('productos/editar/' . $producto['id_producto']) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= site_url('productos/eliminar/' . $producto['id_producto']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="mensaje-vacio">No hay productos disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascrip'); ?>
  <script src="public/assets/js/añadir_producto.js"></script>
<?= $this->endSection(); ?>