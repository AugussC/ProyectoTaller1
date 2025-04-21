<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactos</title>
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/css/estilocontactos.css?v=1" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  </head>
  <body>

     <div class="container pt-3">
        <div class="h1 mb-4 text-center">Comunicate con Nosotros</div>
        <div class="row">
            <!-- Columna izquierda: Datos de contacto + Mapa -->
            <div class="col-md-6">
            <h5>
                Realizá tus consultas o coordiná una cita previa por WhatsApp para establecer día y horario de retiro.
            </h5>

            <div class="row mt-4">
        <!-- Columna Contactanos -->
        <div class="col-sm-6">
            <h4>Contactanos</h4>
            <p><i class="bi bi-telephone"></i> 3795049857</p>
            <p><i class="bi bi-telephone"></i> 3794043233</p>
            <p><i class="bi bi-envelope"></i> retromaniacos@gmail.com</p>
        </div>

        <!-- Columna Redes Sociales -->
        <div class="col-sm-6">
            <h4>Redes Sociales</h4>
            <div class="iconos-redes">
            <a href="#"><i class="bi bi-instagram "></i></a>
            <a href="#"><i class="bi bi-facebook "></i></a>
            <a href="#"><i class="bi bi-whatsapp "></i></a>
            </div>
        </div>
        </div>


            <div class="mt-4">
                <h4>Nuestra Ubicación</h4>
                <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d526.2194504406978!2d-58.812693446875485!3d-27.470243251544183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b6979659d2b%3A0x68e3e4a3415db682!2sAv.%20Chacabuco%20941%2C%20W3402%20Corrientes!5e0!3m2!1ses!2sar!4v1745025467885!5m2!1ses!2sar"
                    width="100%" 
                    height="250" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
            </div>
            </div>

            <!-- Columna derecha: Formulario -->
            <div class="col-md-6 mt-5 mt-md-0">
            <form class="contact-form" action="#" method="post">
                <div class="mb-3">
                <label for="nombre" class="form-label">NOMBRE</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                <label for="email" class="form-label">EMAIL</label>
                <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                <label for="telefono" class="form-label">TELÉFONO (opcional)</label>
                <input type="text" id="telefono" name="telefono" class="form-control">
                </div>

                <div class="mb-3">
                <label for="mensaje" class="form-label">MENSAJE (opcional)</label>
                <textarea id="mensaje" name="mensaje" rows="4" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            </div>
        </div>
        </div>


        

        <script src="public/assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>