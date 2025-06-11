document.addEventListener("DOMContentLoaded", function () {
  const datosInventario = window.datosInventario;

  const canvas = document.getElementById('graficoStock');
  if (!canvas) {
    console.error("Canvas no encontrado");
    return;
  }

  const ctx = canvas.getContext('2d');
  const conStockSuficiente = datosInventario.total - datosInventario.bajoStock - datosInventario.sinStock;

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Stock suficiente', 'Stock bajo', 'Sin stock'],
      datasets: [{
        data: [conStockSuficiente, datosInventario.bajoStock, datosInventario.sinStock],
        backgroundColor: [
          'rgba(75, 192, 192, 0.7)',
          'rgba(255, 206, 86, 0.7)',
          'rgba(255, 99, 132, 0.7)'
        ],
        borderColor: [
          'rgba(75, 192, 192, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'bottom' },
        title: { display: true, text: 'Estado del Inventario de Camisetas' }
      }
    }
  });
});
