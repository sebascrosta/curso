var color = prompt ('Elegí uno de los siguientes colores: azul, verde, rojo, violeta');


switch (color) {
  case 'azul':
    console.log('Mi color preferido es el azul');
    break;

  case 'verde':
    console.log('Mi color preferido es el verde');
    break;

  case 'rojo':
    console.log('Mi color preferido es el rojo');
    break;

  case 'violeta':
    console.log('Mi color preferido es el violeta');
    break;

  default:
    console.log('Mi color preferido no está en la lista');

}

/*if (color == 'azul'){
  console.log('Mi color preferido es el azul');
} else if (color == 'rojo'){
  console.log('Mi color preferido es el rojo');
} else if (color == 'verde'){
  console.log('Mi color preferido es el verde');
} else {
  console.log('Mi color preferido no está en la lista');
}*/
