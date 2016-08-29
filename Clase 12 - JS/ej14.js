//Crear un array llamado “amigos” con X nombres dentro del mismo. utilizando foreach y una función anónima (callback) enumerar el nombre de cada amigo y separarlos con una coma y espacio a cada uno. Ej. “1.Juan, 2.Pepe, 3. Carolina, 4….”

var amigos = ['Santi', 'Lu', 'Agus', 'Galbo', 'Guido', 'Cami', 'Pezze']
var resultado = '';
amigos.forEach(function(ameo, i, amigos){
  resultado += ameo;
  if (i < amigos.length - 1){
    resultado += ', ';
  }
})

console.log(resultado);
