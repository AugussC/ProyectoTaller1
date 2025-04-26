<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactos</title>
    <!-- Estilos incluidos -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="public/assets/css/estilocontactos.css?v=1.5" rel="stylesheet" >

  </head>
  <body>
  <div class="container">
    
    <!-- Sección de titulares -->
    <div class="bloque-titulares">
      <h2>Titulares de la Empresa</h2>
      <p>Cantero Augusto y Escalante Joaquín</p>
      <p><strong>Razón social:</strong> RetroManiacos S.R.L.</p>
      
      <!-- Eslogan dinámico cargado por JS -->
      <div class="eslogan-box">
        <p id="eslogan"></p>
      </div>
    </div>

    <!-- Título de contacto  -->
    <h2 class="titulo">Comunicate con Nosotros</h2>

    <div class="row">
      
      <!-- Columna izquierda: Información de contacto y mapa -->
      <div class="col-md-6">

        <!-- Mensaje informativo -->
        <h5>
          Realizá tus consultas o coordiná una cita previa por WhatsApp para establecer día y horario de retiro.
        </h5>

        <div class="seccion-contactos row">
          
          <!-- Contacto directo -->
          <div class="col-sm-6">
            <h4>Contactanos</h4>
            <p><i class="bi bi-telephone"></i> 3795049857</p>
            <p><i class="bi bi-telephone"></i> 3794043233</p>
            <p><i class="bi bi-envelope"></i> retromaniacos@gmail.com</p>
          </div>

          <!-- Redes sociales -->
          <div class="col-sm-6">
            <h4>Redes Sociales</h4>
            <div class="iconos-redes">
              <a href="https://www.instagram.com/agussc_05/" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.facebook.com/augustojoaquin.cantero/" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://wa.me/3795049857" target="_blank"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>
        </div>

        <!-- Mapa de ubicación -->
        <div class="titulo-ubicacion">
          <h4>Nuestra Ubicación</h4>
          <div class="map-responsive">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d526.2194504406978!2d-58.812693446875485!3d-27.470243251544183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b6979659d2b%3A0x68e3e4a3415db682!2sAv.%20Chacabuco%20941%2C%20W3402%20Corrientes!5e0!3m2!1ses!2sar!4v1745025467885!5m2!1ses!2sar" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>

      <!-- Columna derecha: Formulario de contacto -->
      <div class="form-contacto col-md-6 mt-md-0">
        <form class="contact-form" action="#" method="post">
          
          <!-- Campo: Nombre -->
          <div class="linea-text ">
            <label for="nombre" class="form-label">NOMBRE</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo se permiten letras">
          </div>

          <!-- Campo: Email -->
          <div class="linea-text ">
            <label for="email" class="form-label">EMAIL</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>

          <!-- Campo: Teléfono -->
          <div class="linea-text ">
            <label for="telefono" class="form-label">TELÉFONO (opcional)</label>
            <input type="tel" id="telefono" name="telefono" class="form-control" pattern="[0-9]+" title="Solo se permiten números">
          </div>

          <!-- Campo: Mensaje -->
          <div class="linea-text">
            <label for="mensaje" class="form-label">MENSAJE</label>
            <textarea id="mensaje" name="mensaje" rows="4" class="form-control" required></textarea>
          </div>

          <!-- Botón de envío -->
          <button type="submit" class="btn btn-primary">Enviar</button>

          <!-- Mensaje de éxito tras enviar el formulario -->
          <div id="mensaje-exito" class=" mensaje-confirmacion"></div>
        </form>
      </div>
    </div>
  </div>

  <!-- Scripts JS -->
  <script src="public/assets/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/js/eslogan.js"></script>
  <script src="public/assets/js/contactos.js"></script>
</body>
</html>