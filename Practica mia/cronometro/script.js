window.onload = function(){
  var texto = document.querySelector('h1');
  var boton = document.querySelector('button');
  var cuerpo = document.querySelector('body');
  var corriendo = false;

  boton.addEventListener('click', borrarTiempo);
  cuerpo.addEventListener('keypress', cronometro);
}

function borrarTiempo(){
  texto.innerText = '0"';
}

function cronometro(evento){
  if (evento.charCode === 32){
    if (!corriendo){

    }
  }
}
