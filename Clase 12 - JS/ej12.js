// 12. Hacer una funcion para imprimir los múltiplos de 5 del 0 al 500

function mostrarMultiplos(){
  var resultado = '';
  for(var i = 0; i<= 500; i+=5){
    resultado += i;
    resultado += ' ';
  }
  console.log(resultado);
}

mostrarMultiplos();
