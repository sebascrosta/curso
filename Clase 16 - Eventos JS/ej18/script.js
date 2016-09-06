window.onload = function(){
  var idIntervalo = setInterval (cronica, 1000);
}

function cronica(){
  navidad = Date.parse('12/25/2016') / 1000;
  faltanSegundos = navidad - Math.floor(Date.now()/1000);

  var cadena = 'Faltan ' + faltanSegundos + ' segundos para navidad';
  var texto = document.querySelector('h1');
  texto.innerText = cadena;
}
