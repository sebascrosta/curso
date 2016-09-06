var tiempoTranscurrido = 50;

window.onload = function (){

    var segundos = document.querySelector('.segundos');
    var minutos = document.querySelector('.minutos');
    var horas = document.querySelector('.horas');

    var segundero = setInterval(reloj, 1000);
}

function reloj() {

  var segundos = document.querySelector('.segundos');
  var minutos = document.querySelector('.minutos');
  var horas = document.querySelector('.horas');

    tiempoTranscurrido++;


    if (tiempoTranscurrido != 60) {

        segundos.innerText = tiempoTranscurrido;

    } else {
        segundos.innerText = '0';
        tiempoTranscurrido = 0;
        if (minutos.innerText != 59) {

            auxMinutos = parseInt(minutos.innerText) + 1;
            minutos.innerText = auxMinutos;
        } else {
            auxHoras = parseInt(horas.innerText) + 1;
            minutos.innerText = '0';
            horas.innerText = auxHoras;
        }
    }
}
