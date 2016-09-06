var cantClicks = 1;
window.onload = function() {
    document.body.addEventListener('keypress', habilitaBoton)
    var boton = document.querySelector('button');
    // boton.addEventListener('click', alerta);
    // boton.addEventListener('click', fondoRojo);
    // boton.addEventListener('click', fondoRandom);
    // boton.addEventListener('click', fondoRandomDistinto);
    // boton.addEventListener('click', alternaColor);
    boton.addEventListener('click', agregaParrafos);

}

function habilitaBoton(evento){

  console.log(String.fromCharCode(evento.charCode));
  boton = document.querySelector('button');
  
  if(String.fromCharCode(evento.charCode) == 's' || String.fromCharCode(evento.charCode) == 'S'){
    // boton.removeEventListener('click', alerta);
    // boton.removeEventListener('click', fondoRojo);
    // boton.removeEventListener('click', fondoRandom);
    // boton.removeEventListener('click', fondoRandomDistinto);
    // boton.removeEventListener('click', alternaColor);
    boton.removeEventListener('click', agregaParrafos);

  } else if (String.fromCharCode(evento.charCode) == 'p' || String.fromCharCode(evento.charCode) == 'P'){
    // boton.addEventListener('click', alerta);
    // boton.addEventListener('click', fondoRojo);
    // boton.addEventListener('click', fondoRandom);
    // boton.addEventListener('click', fondoRandomDistinto);
    // boton.addEventListener('click', alternaColor);
    boton.addEventListener('click', agregaParrafos);
  }
}

function alerta() {
    alert('Me clickeaste');
}

function fondoRojo() {
    body = document.querySelector('body');
    body.style.background = 'Red';
}

function fondoRandom() {
    body = document.querySelector('body');
    body.style.background = crearColorRGB();

}

function fondoRandomDistinto() {
    body = document.querySelector('body');

    colorActual = body.style.background;

    do {
        proxColor = crearColor();
    } while (proxColor == colorActual);

    body.style.background = proxColor;
}

function alternaColor(){
  body = document.querySelector('body');

  if (body.style.background == 'red'){
    body.style.background = 'blue';
  } else {
    body.style.background = 'red';
  }
}

function agregaParrafos(){
  var parrafo = document.createElement('p');
  contTexto = 'Click número ' + cantClicks;
  var texto = document.createTextNode(contTexto);
  parrafo.appendChild(texto);
  document.body.appendChild(parrafo);
  cantClicks++;
}


function crearColorRGB() {
    valorR = Math.floor(Math.random()*255);
    valorG = Math.floor(Math.random()*255);
    valorB = Math.floor(Math.random()*255);
    valorRGB = 'rgb(' + valorR + ',' + valorG + ',' + valorB + ')';
    return valorRGB;
}
function crearColor() {

    cifraHexa = '';
    valorHexa = '#';

    for (var i = 0; i < 6; i++) {
        numero = Math.floor(Math.random() * 15);

        switch (numero) {
            case 10:
                cifraHexa = 'A';
                break;
            case 11:
                cifraHexa = 'B';
                break;
            case 12:
                cifraHexa = 'C';
                break;
            case 13:
                cifraHexa = 'D';
                break;
            case 14:
                cifraHexa = 'E';
                break;
            case 15:
                cifraHexa = 'F';
                break;
            default:
                cifraHexa = numero
        }

        valorHexa += cifraHexa
    }
    return valorHexa;
}
