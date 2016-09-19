function armaColor() {
  numero = 0;
  valorHexa = '#';
  cifraHexa = '';
  for (var i = 0; i < 6; i++) {
    numero = Math.floor(Math.random()*15);

    switch (numero) {
      case 10:  cifraHexa = 'A'; break;
      case 11:  cifraHexa = 'B'; break;
      case 12:  cifraHexa = 'C'; break;
      case 13:  cifraHexa = 'D'; break;
      case 14:  cifraHexa = 'E'; break;
      case 15:  cifraHexa = 'F'; break;
      default:  cifraHexa = numero;

    }

    valorHexa += cifraHexa;

  }

  return valorHexa;

}

var cambiaColor = function(){
  var container = document.getElementsByTagName('div');
  for (var i = 1; i < container.length; i++) {
    container[i].style.background = armaColor();
  }
}

var idIntervalo = setInterval(cambiaColor, 50);
