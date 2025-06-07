document.getElementById('categoriaSelect').addEventListener('change', function () {
    const nuevaDiv = document.getElementById('nuevaCategoriaDiv');
    const nuevaInput = document.getElementById('nuevaCategoriaInput');
    if (this.value === 'nueva') {
        nuevaDiv.classList.remove('d-none');
        nuevaInput.required = true;
    } else {
        nuevaDiv.classList.add('d-none');
        nuevaInput.required = false;
    }
});