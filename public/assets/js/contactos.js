document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form');
    const mensajeExito = document.getElementById('mensaje-exito');
  
    form.addEventListener('submit', function(e) {
      e.preventDefault(); // Evita envío real
      form.reset(); // Limpia los campos
  
      // Muestra el mensaje
      mensajeExito.textContent = '¡Formulario enviado correctamente!';
  
      // Borra el mensaje luego de unos segundos (opcional)
      setTimeout(() => {
        mensajeExito.textContent = '';
      }, 4000);
    });
  });
  
