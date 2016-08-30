/*Hacer una funcion para calcular la factorial de un número utilizando un for​. Por
ejemplo:
5! = 5 x 4 x 3 x 2 x 1 = 120
*/

function factorial (numero){
  var resultado = 1;
  for (var i = 1; i <= numero; i++) {
    resultado *= i;
  }
  return resultado;
}

console.log(factorial(10));
