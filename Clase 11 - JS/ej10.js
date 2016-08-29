var array = [];
var pares = [];
var impares = [];


for (var i = 1; i <= 521; i++) {
  array.push(i)
}

for (var i = 0; i < array.length; i++) {
  if(array[i] % 2 == 0){
    pares.push(array[i])
  }
}


for (var i = 0; i < array.length; i++) {
  if(array[i] % 2 == 1){
    impares.push(array[i])
  }
}

console.log( pares + '\nCantidad: ' + pares.length);
console.log( impares + '\nCantidad: ' + pares.length);
