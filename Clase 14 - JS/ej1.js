//Utilizando for...in realizar una función que dado un objeto imprima los nombres de cada uno de sus atributos y sus valores.

var objeto = {
  nombre: 'Sebas',
  edad: 22
}

function verPropiedades(objeto){
  for (prop in objeto){
    console.log(prop + ': ' + objeto[prop]);
  }
}

verPropiedades(objeto);
