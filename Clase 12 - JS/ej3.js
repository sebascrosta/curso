// Escribir una función que retorne​un número revertido. (ej 1234567 lo convierta a 7654321). Probarlo tanto creando una función como asignandola a una variable.

function revertir (numero){
  var invertido = '';

  numero = numero.toString();

  for (var i = numero.length - 1 ; i >= 0; i--) {
    invertido += numero[i]
  }

  return invertido;
}

var invertir = function (numero) {
  var invertido = '';
  numero = numero.toString();

  for (var i = numero.length - 1 ; i >= 0; i--) {
    invertido += numero[i]
  }

  return invertido;
}

console.log(revertir(12345678));
console.log(invertir(87654321));
