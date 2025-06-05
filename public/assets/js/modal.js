document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.ver-factura').forEach(boton => {
        boton.addEventListener('click', function (e) {
            e.preventDefault();
            const idFactura = this.dataset.id;

            fetch(`<?= base_url('pedidos') ?>/${idFactura}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalContainer').innerHTML = html;
                    const modal = new bootstrap.Modal(document.getElementById('modalFactura'));
                    modal.show();
                });
        });
    });
});