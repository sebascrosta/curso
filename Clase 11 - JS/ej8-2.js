function sortNumber(a,b) {
    return a - b;
}

var eliminaRepetidos = function () {

  var array = [];

  var iniciofor = Date.now();
  for (var i = 0; i<10000000; i++){
    array.push(parseInt(Math.floor(Math.random()*200)));
  }

  array = array.filter(function(item,pos){
    return array.indexOf(item) == pos;
  })
  array.sort(sortNumber);
  console.log(array)
}

var inicio = Date.now();
eliminaRepetidos();
console.log((Date.now() - inicio) + ' ms');
