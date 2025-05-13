
    const visitasCtx = document.getElementById('visitasPorMes').getContext('2d');
    new Chart(visitasCtx, {
      type: 'line',
      data: {
        labels: ['Febrero', 'Marzo', 'Abril'],
        datasets: [{
          label: 'Visitas Totales',
          data: [86900, 65000, 72000],
          borderColor: '#2ecc71',
          backgroundColor: 'rgba(46, 204, 113, 0.2)',
          tension: 0.4,
          fill: true,
          pointRadius: 6,
          pointBackgroundColor: '#27ae60'
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false
          }
        },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  