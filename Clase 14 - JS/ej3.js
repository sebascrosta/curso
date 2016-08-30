var perro = {
  nombre: 'Tyrion',
  raza: 'Caniche'
}

function agregarProp (objeto, prop, valor){
  objeto[prop] = valor;

}

agregarProp (perro, 'peso', "do' kilito'");

console.log(perro);
