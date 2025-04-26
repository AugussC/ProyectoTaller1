<!-- Vinculación del archivo de estilos del footer -->
<link href="public/assets/css/estilofooter.css?v=1.12" rel="stylesheet">

<!-- Estructura principal del pie de página -->
<footer class="footer ">

  <!-- Sección de navegación interna -->
  <div class="footer-section">
    <h4>Índice</h4>
    <ul>
      <li><a href="<?= base_url('inicio') ?>">- Inicio</a></li>
      <!-- Catálogo oculto temporalmente -->
      <!-- <li><a href="<?= base_url('catalogo') ?>">- Catálogo</a></li> -->
      <li><a href="<?= base_url('quienes_somos') ?>">- ¿Quiénes somos?</a></li>
      <li><a href="<?= base_url('comercializacion') ?>">- Comercialización</a></li>
      <li><a href="<?= base_url('contactos') ?>">- Contactos</a></li>
      <li><a href="<?= base_url('lavado_recomendado') ?>">- Lavado Recomendado</a></li>
      <li><a href="<?= base_url('guia_talles') ?>">- Guía de Talles</a></li>
      <li><a href="<?= base_url('preguntas_frecuentes') ?>">- Preguntas Frecuentes</a></li>
      <li><a href="<?= base_url('terminos') ?>">- Términos y Condiciones</a></li>
    </ul>
  </div>

  <!-- Sección de medios de pago -->
  <div class="footer-section">
    <h4>Medios de Pago</h4>
    <div class="icon-grid">
      <img src="public/assets/img/visa.png" alt="Visa">
      <img src="public/assets/img/mastercard.png" alt="MasterCard">
      <img src="public/assets/img/naranja.png" alt="Tarjeta Naranja">
      <img src="public/assets/img/logoMercadoPago2.png" alt="MercadoPago">
      <img src="public/assets/img/logoBanelco.png" alt="Banelco">
      <img src="public/assets/img/logoLink.png" alt="Red Link">
      <img src="public/assets/img/logoTransferenciaBancaria.png" alt="Transferencia Bancaria">
    </div>
  </div>

  <!-- Sección de formas de envío -->
  <div class="footer-section">
    <h4>Formas de Envío</h4>
    <div class="icon-grid">
      <img src="public/assets/img/correoargentino.png" alt="Correo Argentino">
      <img src="public/assets/img/andreani.png" alt="Andreani">
    </div>
  </div>

  <!-- Sección de contacto -->
  <div class="footer-section">
    <h4>Contactanos</h4>
    <p><i class="bi bi-telephone"></i> 3795049857</p>
    <p><i class="bi bi-telephone"></i> 3794043233</p>
    <p><span class="icon">@</span> retromaniacos@gmail.com</p>
  </div>

  <!-- Sección de redes sociales y consulta -->
  <div class="footer-section">
    <h4>Redes Sociales</h4>
    <div class="social-icons">
      <a href="https://www.instagram.com/agussc_05/" target="_blank"><i class="bi bi-instagram"></i></a>
      <a href="https://www.facebook.com/augustojoaquin.cantero/" target="_blank"><i class="bi bi-facebook"></i></a>
      <a href="https://wa.me/3795049857" target="_blank"><i class="bi bi-whatsapp"></i></a>
    </div>

    <h4>¿Necesitás ayuda?</h4>
    <a href="<?= base_url('contactos') ?>">
      <button class="consulta-btn">Consultanos</button>
    </a>
  </div>

</footer>
