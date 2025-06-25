<?php echo $this->extend('layout'); ?>

<?php echo $this->section('estilos'); ?> 
<link href="public/assets/css/estilo_admin.css?v=2.3" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php echo $this->endSection(); ?> 

<?php echo $this->section('contenido'); ?>

<div class="container capa-beige">
  <h1>Panel Principal</h1>

  <script>
    window.datosInventario = {
      total: <?= json_encode($productos) ?>,
      bajoStock: <?= json_encode($stockBajo) ?>,
      sinStock: <?= json_encode($sinStock) ?>
    };
  </script>


  <div class="row">
    <div class="col-12 col-md-7 mb-4">
      <div class="card">
        <h2>Distribución de Stock</h2>
        <canvas id="graficoStock"></canvas>
      </div>
    </div>

    <div class="col-12 col-md-5">
      <div class="row fila-lateral">
        <div class="col">
          <div class="card-lateral ">
            <h5>Consultas sin responder</h5>
            <p><?= esc($consultasSinResponder) ?></p>
          </div>
        </div>
        <div class="col">
          <div class="card-lateral">
            <h5>Total de productos</h5>
            <p><?= esc($productos) ?> camisetas</p>
          </div>
        </div>
        <div class="col">
          <div class="card-lateral">
            <h5>Carritos listos para la compra</h5>
            <p><?= esc($carritosAbandonados) ?></p>
          </div>
        </div>
        <div class="col">
          <div class="card-lateral">
            <h5>Usuarios registrados</h5>
            <p><?= esc($usuarios) ?></p>
          </div>
        </div>
        <div class="col">
          <div class="card-lateral">
            <h5>Stock bajo</h5>
            <p><?= esc($stockBajo) ?></p>
          </div>
        </div>
        <div class="col">
          <div class="card-lateral">
            <h5>Sin Stock</h5>
            <p><?= esc($sinStock) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php echo $this->endSection(); ?>

<?php echo $this->section('javascrip'); ?> 
<script >document.addEventListener("DOMContentLoaded", function () {
  const datosInventario = window.datosInventario;

  const canvas = document.getElementById('graficoStock');
  if (!canvas) {
    console.error("Canvas no encontrado");
    return;
  }

  const ctx = canvas.getContext('2d');
  const conStockSuficiente = datosInventario.total - datosInventario.bajoStock - datosInventario.sinStock;

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Stock suficiente', 'Stock bajo', 'Sin stock'],
      datasets: [{
        data: [conStockSuficiente, datosInventario.bajoStock, datosInventario.sinStock],
        backgroundColor: [
          'rgba(75, 192, 192, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(255, 99, 132, 0.7)'
        ],
        borderColor: [
          'rgba(75, 192, 192, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' },
      }
    }
  });
});
</script>
<?php echo $this->endSection(); ?>
