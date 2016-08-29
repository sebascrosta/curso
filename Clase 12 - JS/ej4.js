//Crear una función que repita la palabra “hola” con un espacio entre cada palabra 20 veces. Probarlo tanto creando una función como asignandola a una variable.

function hola (){
  var texto = '';
  for (var i = 0; i < 20; i++) {
    texto += 'hola ';
  }
  console.log(texto);
}

hola();
