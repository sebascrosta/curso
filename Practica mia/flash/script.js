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

var contador = 0;

function setearColor() {

    var divs = document.querySelectorAll('div')

    for (var i = 0; i < divs.length; i++) {
        divs[i].style.background = crearColor();
    }

}

window.onload = function(){

var idIntervalo = setInterval(setearColor, 50);
var activo = true;

var cuerpo = document.querySelector('body');

cuerpo.addEventListener('click', cambiaIntervalo)
cuerpo.addEventListener('keypress', cambiaIntervaloConEspacio)

function cambiaIntervalo() {
    if (activo) {
        clearInterval(idIntervalo);
        activo = false;
    } else {
        idIntervalo = setInterval(setearColor, 50);
        activo = true;
    }
}

function cambiaIntervaloConEspacio(evento) {
    if(evento.charCode === 32){
    if (activo) {
        clearInterval(idIntervalo);
        activo = false;
    } else {
        idIntervalo = setInterval(setearColor, 50);
        activo = true;
    }
  }
}

}
