function asignarAnimal (numero){
  var animal;
  var idAnimal = numero % 10;


  switch (idAnimal) {
    case 0: animal = 'Perro'; break;
    case 1: animal = 'Gato'; break;
    case 2: animal = 'Vaca'; break;
    case 3: animal = 'Caballo'; break;
    case 4: animal = 'Cerdo'; break;
    case 5: animal = 'Lechuza'; break;
    case 6: animal = 'Vinchuca'; break;
    case 7: animal = 'Araña'; break;
    case 8: animal = 'Murciélago'; break;
    case 9: animal = 'Comadreja'; break;

  }
  return animal;
}

function hacerSonido(animal) {
  var sonido;

  switch (animal) {
    case 'Perro': sonido = 'Guau'; break;
    case 'Gato': sonido = 'Miau'; break;
    case 'Vaca': sonido = 'Muuu'; break;
    case 'Caballo': sonido = 'Ico'; break;
    case 'Cerdo': sonido = 'Oink'; break;
    case 'Lechuza': sonido = 'Ho-oh'; break;
    case 'Vinchuca': sonido = 'Vinchuu'; break;
    case 'Araña': sonido = 'SPIDERMAN!'; break;
    case 'Murciélago': sonido = 'BATMAN!'; break;
    case 'Comadreja': sonido = 'Soy la comadreja'; break;
  }

  return sonido;
}

function conciertoAnimal(){
  for (var i = 0; i < 10; i++) {
    console.log(hacerSonido(asignarAnimal(Math.floor(Math.random()*100))));
  }
}

conciertoAnimal();
