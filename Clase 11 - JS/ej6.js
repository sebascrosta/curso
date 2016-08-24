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

switch (perro.dieta) {
  case 'Omnívoro':
    console.log('El perro es omnívoro');
    break;

  case 'Carnívoro':
    console.log('El perro es Carnívoro');
    break;

  case 'Herbívoro':
    console.log('El perro es Herbívoro');
    break;

  default:
  console.log('No sé qué come el bicho ese, la verdad');

}
