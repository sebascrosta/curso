var eliminaRepetidos = function () {

  var array = [];

  for (var i = 0; i<1000000; i++){
    array.push(Math.floor(Math.random()*10));
  }

  var arrayNuevo = []

  for (var i = 0; i<array.length; i++){
    if(array.lastIndexOf(array[i]) == i){
      arrayNuevo.push(array[i])
    }
  }
  console.log(arrayNuevo)
}

var eliminaRepetidos2 = function(){

  var array = [];

  for (var i = 0; i<1000000; i++){
    array.push(Math.floor(Math.random()*10));
  }

  var arrayNuevo = []

  for (var i = 0; i<array.length; i++){
    if(arrayNuevo.indexOf(array[i]) == -1){
      arrayNuevo.push(array[i])
    }
  }
  console.log(arrayNuevo)
}


var inicio = Date.now()
eliminaRepetidos();
console.log((Date.now() - inicio) + ' ms');

inicio = Date.now()
eliminaRepetidos2();
console.log((Date.now() - inicio) + ' ms');
