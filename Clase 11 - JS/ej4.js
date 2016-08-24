var perro = {
  nombre : 'Tyrion',
  especie : 'Perro',
  color : 'Blanco',
  patas : 4,
  habitat : 'Doméstico',
  dieta : 'Omnívoro',

  sonido: function(){
    console.log('guau');
  }
}

var gato = {
  nombre : 'Dany',
  especie : 'Gato',
  color : 'Gris',
  patas : 4,
  habitat : 'Doméstico',
  dieta : 'Omnívoro',

  sonido: function(){
    console.log('miau');
  }
}

if (perro.nombre == gato.nombre){
  console.log("Los nombres son iguales");
}
if (perro.especie == gato.especie){
  console.log("Las especies son iguales");
}
if (perro.color == gato.color){
  console.log("Los colores son iguales");
}
if (perro.patas == gato.patas){
  console.log("Tienen la misma cantidad de patas");
}
if (perro.habitat == gato.habitat){
  console.log("Los hábitat son iguales");
}
if (perro.dieta == gato.dieta){
  console.log("Las dietas son iguales");
}
