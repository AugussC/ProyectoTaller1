
        function habilitarCampos() {
            const inputs = document.querySelectorAll('form input');
            inputs.forEach(input => input.disabled = false);
            document.getElementById('guardarBtn').disabled = false;
        }

        function mostrarCambioContrasena() {
            document.getElementById('formContrasena').style.display = 'block';
        }
