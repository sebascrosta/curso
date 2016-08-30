 //Modificar el punto 3 para que si el atributo no existe previamente, no lo agregue.

 var perro = {
   nombre: 'Tyrion',
   raza: 'Caniche'
 }

 function agregarProp (objeto, prop, valor){
   if (objeto[prop] != undefined){
     objeto[prop] = valor;
   }
 }

 agregarProp (perro, 'peso', 'do kilito');

 console.log(perro);
