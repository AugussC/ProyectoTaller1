<?php echo $this->extend('layout'); ?>
    <?php echo $this->section('estilos'); ?> 
    <link href="public/assets/css/estilo_admin.css?v=1.5" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php echo $this->endSection(); ?> 

    <?php echo $this->section('contenido'); ?>
    <div class="container">
  <h1>Estadísticas simuladas de tráfico</h1>

  <div class="panel-estadisticas">
    
    <!-- IZQUIERDA: Gráfico y resumen -->
    <div class="panel-izquierda">
      <h2>Visitas Totales (últimos 3 meses)</h2>
      <canvas id="visitasPorMes"></canvas>

      <h2>Resumen</h2>
      <div class="cards-container">
        <div class="card">
          <h3>Total Visits</h3>
          <p>72,000</p>
        </div>
        <div class="card">
          <h3>Bounce Rate</h3>
          <p>38%</p>
        </div>
        <div class="card">
          <h3>Pages per Visit</h3>
          <p>9.5</p>
        </div>
        <div class="card">
          <h3>Avg Visit Duration</h3>
          <p>00:04:42</p>
        </div>
      </div>
    </div>

    <!-- DERECHA: Cards de resumen lateral -->
    <div class="panel-derecha">
      <div class="card-lateral">
        <h3>Consultas sin responder</h3>
        <p>7</p>
      </div>
      <div class="card-lateral">
        <h3>Total de productos</h3>
        <p>84 camisetas</p>
      </div>
      <div class="card-lateral">
        <h3>Pedidos en proceso</h3>
        <p>12</p>
      </div>
      <div class="card-lateral">
        <h3>Ventas del mes</h3>
        <p>320</p>
      </div>
      <div class="card-lateral">
        <h3>Usuarios registrados</h3>
        <p>1,254</p>
      </div>
      <div class="card-lateral">
        <h3>Stock bajo</h3>
        <p>5 productos</p>
      </div>
    </div>

  </div>
</div>



  
  <?php echo $this->endSection(); ?>

  <?php echo $this->section('javascrip'); ?> 
  <script src="public/assets/js/grafico_estadisticas.js"></script>
  <?php echo $this->endSection(); ?>