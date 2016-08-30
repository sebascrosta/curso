//Modificar el punto 1 para que además, si algún atributo del objeto sea una función, este se ejecute

var objeto = {
  nombre: 'Sebas',
  edad: 22,
  saludar: function() { console.log('Holis');}
}

function verPropiedades(objeto){
  for (prop in objeto){

    if (typeof objeto[prop] == 'function'){
      objeto[prop]();
    }
    console.log(prop + ': ' + objeto[prop]);
  }
}

verPropiedades(objeto);
