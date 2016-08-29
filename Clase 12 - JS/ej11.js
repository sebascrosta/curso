// 11. Hacer una funcion para imprimir los números enteros entre (x,y)

function enterosEntre (x, y){
  var resultado = ''
  for (var i = x; i <= y; i++){
      resultado += i;
      resultado += ' ';
  }
  console.log(resultado);
}

var x = Math.floor(Math.random()*100);
var y = Math.floor(Math.random()*100) + x;

enterosEntre(x, y);
