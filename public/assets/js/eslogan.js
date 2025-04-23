const esloganes = [
  "“La camiseta siempre al que la siente”",
  "“Todo pasa, pero el fútbol queda”",
  "“No es solo una remera, es la final que ganaste con el alma”",
  "“Jugamos como siempre, revivilo como nunca”",
  "“Retro es retro. Y el fútbol, es fútbol.”",
  "“Vestirse de historia también es sentirla”",
  "“Pasión por la historia del fútbol, camiseta por camiseta”",
  "“No entendemos otra pasión que no sea el fútbol”",
  "“Una camiseta puede revivir esos 90 minutos”",
  "“Nuestras camisetas tienen más historia que muchas selecciones”",
  "“Cada camiseta, una historia que vuelve a latir”",
  "“No vendemos ropa, vendemos recuerdos”",
  "“Volvé al fútbol que te enamoró”",
  "“Del potrero al corazón, un viaje en tela”",
  "“Donde las leyendas aún sudan la camiseta”",
  "“No entendemos otra pasión que no sea el fútbol”",
  "“Vestirse de historia también es sentirla”",
  "“Todo pasa, pero el fútbol queda”",
  "“Jugamos como siempre, revivilo como nunca”",
  "“El fútbol es pasión, locura y camisetas”",
  "“Cuando salís a la cancha, salís con toda tu historia encima”",
    
];

let i = 0;
const esloganEl = document.getElementById("eslogan");

function rotarEslogan() {
  esloganEl.textContent = esloganes[i];
  i = (i + 1) % esloganes.length;
}

// Mostrar el primer eslogan y rotar cada 5 segundos
rotarEslogan();
setInterval(rotarEslogan, 3000);