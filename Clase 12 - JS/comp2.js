/*Hacer una funcion para calcular el minimo comun multiplo y el maximo comun divisor de dos números. */

function descomponer(numero, arrayExp) {
    for (var i = Math.floor(numero / 2); i >= 1; i--) {
        if (numero % i == 0) {
            arrayExp.push(numero / i);
            break;
        }
    }
    if (i > 1) {
        descomponer(i, arrayExp)
    }
    return arrayExp;
};


function mcd(numero1, numero2) {

    if (numero2 == 0){
      return numero1;
    } else {
      return mcd(numero2, numero1 % numero2)
    }
}

function mcm(numero1, numero2){
  return (numero1 * numero2)/mcd(numero1, numero2);
}

console.log(mcm(8,64));
