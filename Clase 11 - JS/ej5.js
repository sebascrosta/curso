var perro = {
  nombre : 'Tyrion',
  especie : 'Perro',
  color : 'Blanco',
  patas : 4,
  habitat : 'Doméstico',
  dieta : 'Omnívoro',
  peso: 2,

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
  peso : 2,

  sonido: function(){
    console.log('miau');
  }
}

if (perro.peso > gato.peso){
  console.log('El perro es más pesado');
} else {
  console.log('El gato es más pesado');
}
