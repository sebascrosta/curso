var cantidades = [];
var masRepeticiones = []

for (var z=0; z<10; z++) {

  var contador = 0;
  var array = [];
  var numero = 0;

    while (contador <= 1000) {
        numero =Math.floor(Math.random() * 100);

        if (array.indexOf(numero) == -1) {
            array.push(1);
        } else {
            array[array.indexOf(numero)]++;
        }

        contador++;
    }

    for (var i = 0; i < array.length; i++) {
        if (array[i] != 1) {
            masRepeticiones.push(parseInt(array[i]));
            break;
        }
    }

    cantidades.push(parseInt(array.length));
}

cantidades.sort();
masRepeticiones.sort();

console.log('Cant. numeros: ' + cantidades);
console.log('Veces que se repitió el número más común: ' + masRepeticiones);

var suma = 0;

suma = cantidades.reduce(function(valorAnterior, valorActual){
   return valorAnterior+valorActual;
});

console.log('Promedio de Cantidades:' + Math.floor(suma/cantidades.length));

suma = masRepeticiones.reduce(function(valorAnterior, valorActual){
   return valorAnterior+valorActual;
});

console.log('Promedio de veces del más repetido:' + Math.floor(suma/masRepeticiones.length));
