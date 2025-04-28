<?php echo $this->extend('layout'); ?>

    <?php echo $this->section('estilos'); ?>
    <link href="public/assets/css/estilo_guia_talles.css?v=1.5" rel="stylesheet" >
    <?php echo $this->endSection(); ?> 

    <?php echo $this->section('contenido'); ?> 
    <!-- Contenedor principal -->
    <div class="contenedor-talles">

      <!-- Título centrado -->
      <h1>Camisetas</h1>

      <!-- Nota aclaratoria -->
      <p class="text_especial">Las medidas incluidas son de referencia, pueden variar 1cm +/-.</p>

      <!-- Tabla de talles -->
      <table>
    <thead>
      <tr>
        <th>Número</th>
        <th>Talle</th>
        <th>Pecho</th>
        <th>Largo</th>
      </tr>
    </thead>
    <tbody>
      <!-- Fila 1 -->
      <tr><td>1</td><td>S</td><td>50 cm</td><td>67 cm</td></tr>
      <!-- Fila 2 -->
      <tr><td>2</td><td>M</td><td>53 cm</td><td>72 cm</td></tr>
      <!-- Fila 3 -->
      <tr><td>3</td><td>L</td><td>55 cm</td><td>74 cm</td></tr>
      <!-- Fila 4 -->
      <tr><td>4</td><td>XL</td><td>58 cm</td><td>76 cm</td></tr>
      <!-- Fila 5 -->
      <tr><td>5</td><td>XXL</td><td>61 cm</td><td>79 cm</td></tr>
      <!-- Fila 6 -->
      <tr><td>6</td><td>XXXL</td><td>63 cm</td><td>81 cm</td></tr>
    </tbody>
  </table>
    </div>
    <?php echo $this->endSection(); ?>
