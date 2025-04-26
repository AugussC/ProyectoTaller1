<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comercialización</title>
    <!-- Estilos Incluidos -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/css/estilocomercializacion.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
  </head>
  <body>

  <!-- Sección principal de comercialización -->
  <section class="mt-3 px-3" style="text-align: justify;">

    <!-- Título principal -->
    <h1 class="text-center mb-3">Comercialización</h1>

    <!-- Sección: Formas de Entrega y Envío -->
    <div class="mb-3">
      <h3><i class="bi bi-box-seam"></i> Formas de Entrega y Envío</h3>
      <ul>
        <li><strong>¿A dónde enviamos?</strong> Realizamos envíos a todo el territorio argentino 🇦🇷.</li>
        <li><strong>¿Con qué correo trabajamos?</strong> Utilizamos <em>Correo Argentino</em> y <em>Andreani</em> como empresas transportistas.</li>
        <li><strong>¿Cuánto tarda el envío?</strong> El tiempo de entrega varía según la ubicación. Una vez despachado el pedido, te enviamos el número de seguimiento.</li>
        <li><strong>¿Puedo retirar personalmente?</strong> Sí, también podés retirar en nuestra sucursal ubicada en Av. Chacabuco 941.</li>
      </ul>
    </div>

    <!-- Acordeón visual de formas de entrega -->
    <div class="accordion" id="accordionFormaEnviosyEntrega">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFormasEnviosyEntrega">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFormaEnviosyEntrega" aria-expanded="false" aria-controls="collapseFormaEnviosyEntrega">
            Formas de Entrega y Envíos
          </button>
        </h2>
        <div id="collapseFormaEnviosyEntrega" class="accordion-collapse collapse" aria-labelledby="headingFormasEnviosyEntrega" data-bs-parent="#accordionFormaEnviosyEntrega">
          <div class="accordion-body payment-icons text-center">
            <img src="public/assets/img/correoargentino.png" alt="Correo Argentino">
            <img src="public/assets/img/andreani.png" alt="Andreani">
            <img src="public/assets/img/retiroSucursal.png" alt="Retiro por Sucursal">
          </div>
        </div>
      </div>
    </div>

    <!-- Sección: Medios de Pago -->
    <div class="my-3">
      <h3><i class="bi bi-credit-card"></i> Medios de Pago</h3>
      <ul>
        <li><strong>¿Cómo puedo pagar?</strong> Aceptamos pagos con MercadoPago, tarjetas de crédito/débito y transferencia bancaria.</li>
        <li><strong>¿Es seguro comprar en RetroManiacos?</strong> ¡Sí! Todos los pagos se procesan en plataformas seguras. No almacenamos datos sensibles.</li>
      </ul>

      <!-- Acordeón visual de medios de pago -->
      <div class="accordion" id="accordionPagos">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingPagos">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePagos" aria-expanded="false" aria-controls="collapsePagos">
              Medios de Pago Aceptados
            </button>
          </h2>
          <div id="collapsePagos" class="accordion-collapse collapse" aria-labelledby="headingPagos" data-bs-parent="#accordionPagos">
            <div class="accordion-body payment-icons text-center">
              <img src="public/assets/img/visa.png" alt="Visa">
              <img src="public/assets/img/mastercard.png" alt="Mastercard">
              <img src="public/assets/img/naranja.png" alt="Naranja">
              <img src="public/assets/img/logoMercadoPago2.png" alt="MercadoPago">
              <img src="public/assets/img/logoBanelco.png" alt="Banelco">
              <img src="public/assets/img/logoLink.png" alt="Red Link">
              <img src="public/assets/img/logoTransferenciaBancaria.png" alt="Transferencia Bancaria">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sección: Cambios y Devoluciones -->
    <div class="mb-4">
      <h3><i class="bi bi-repeat"></i> Cambios y Devoluciones</h3>
      <ul>
        <li><strong>¿Puedo cambiar un producto?</strong> Sí, tenés hasta 30 días corridos desde que recibís tu pedido. La prenda debe estar sin uso y en su empaque original. El costo del envío (ida y vuelta) corre por cuenta del cliente.</li>
        <li><strong>¿Y si no me gustó la compra?</strong> Podés pedir la devolución del producto dentro de los primeros 10 días desde que lo recibiste. Al aprobarse, te reintegramos el dinero (descontando el envío inicial).</li>
      </ul>
    </div>

    <!-- Sección: Consultas y dudas -->
    <div class="mb-4">
      <h3><i class="bi bi-question-lg"></i> ¿Tenés otra duda?</h3>
      <ul>
        <li>
          Estamos para ayudarte. Si tenés más dudas escribinos a nuestro correo <strong>retromaniacos@gmail.com</strong>,
          por <a href="https://wa.me/3795049857" target="_blank">WhatsApp</a> o desde el
          <a href="<?= base_url('contactos')?>">formulario de contacto</a>.
          ¡Respondemos lo más rápido posible!
        </li>
      </ul>
    </div>
  </section>

  <!-- Script de Bootstrap -->
  <script src="public/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>