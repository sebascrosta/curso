var frutas = ['Banana', 'Manzana', 'Pera', 'Ananá', 'Uva', 'Naranja', 'Pera', 'Durazno', 'Sandía', 'Melón'];

var indice = 0;
var ensalada = [];

for (var i = 0; i<4; i++){
  indice = Math.floor(Math.random()*10);
  ensalada.push(frutas[indice]);
}

console.log(ensalada.join());
