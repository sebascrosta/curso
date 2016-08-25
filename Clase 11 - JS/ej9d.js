var frutas = ['Banana', 'Manzana', 'Pera', 'Ananá', 'Uva', 'Naranja', 'Pera', 'Durazno', 'Sandía', 'Melón'];

var indice = 0;
var ensalada = [];

do{
  indice = Math.floor(Math.random()*10);
  if (ensalada.indexOf(frutas[indice]) == -1 ) {
    ensalada.push(frutas[indice]);
  }
} while(ensalada.length < 4)

ensalada.sort();

console.log(ensalada.join());
