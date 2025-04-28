<?php echo $this->extend('layout'); ?>

    <?php echo $this->section('estilos'); ?> 
    <link href="public/assets/css/estilolavado.css?v=1.3" rel="stylesheet" >
    <?php echo $this->endSection(); ?> 

    <?php echo $this->section('contenido'); ?> 
    <!-- Contenedor principal -->
    <div class="contenedor-principal-lavados">

      <!-- Título -->
      <h1>Lavado Recomendado</h1>

      <!-- Aclaración  -->
      <p>
        <strong>Aclaración:</strong> ¡Estas recomendaciones son para cualquier tipo de calidad, tanto camisetas originales como réplicas! ¡Los estampados suelen ser delicados!
      </p>

      <!-- Lista de recomendaciones para el lavado -->
      <ol>
        <li>
          <strong>Lavarlas por el revés y con agua fría.</strong>
        </li>
        <li>
          <strong>NUNCA meterlas a la lavadora o secadora.</strong>
          Si quieren saber por qué se dañan los estampados, esta es una razón de peso.
        </li>
        <li>
          <strong>Si las van a lavar, háganlo en un platón, a mano.</strong>
          Utilicen jabón blanco para quitarles el polvo o mal olor. (¡Cuidado con los estampados!)
        </li>
        <li>
          <strong>Si las van a secar al aire libre, procuren siempre que no reciban el sol directo.</strong>
          De eso depende que se conserve el color original de las camisetas.
        </li>
      </ol>

      <!-- Aclaración adicional  -->
      <p>¡Estas recomendaciones funcionan también para todas nuestras prendas!</p>

      <!-- Información sobre el envío de prendas con escudo bordado -->
      <p>
        <strong>Si pediste una prenda con escudo bordado, es muy probable que te haya llegado así:</strong>
      </p>

      <!-- Contenedor de imágenes del bordado -->
      <div class="contenedor-imagenes">
        <img src="public/assets/img/bordadocamiseta.jpg" class="imagen-uniforme" alt="Prenda con escudo bordado">
        <img src="public/assets/img/escudocamiseta.jpg" class="imagen-uniforme" alt="Prenda con escudo bordado">
      </div>

      <!-- Explicación del envío del bordado -->
      <p>
        Lo enviamos así para que no se doble el bordado en el envío. Vos lo podés recortar fácilmente para que quede más estético.
      </p>

      <!-- Línea divisoria -->
      <hr>

      <!-- Política de cambios por fallas de fábrica -->
      <p>
        <strong>¡En caso de que el producto llegue con falla de fábrica</strong>, debe ser notificado dentro de las 48 hs posteriores a recibir el paquete (enviar un mensaje a nuestro WhatsApp). De lo contrario, no será posible realizar el cambio: <strong>SIN EXCEPCIONES</strong>.
      </p>
    </div>
    <?php echo $this->endSection(); ?>