/*10. Crear una función recursiva​que cuente la cantidad de movimientos necesarios para
solucionar una torre de hanoi dependiendo de la cantidad de discos (3­-8).
Se tienen que obedecer estas 3 reglas para lograr desplazar la torre de un palo a
otro:
a. Sólo se puede mover un disco cada vez.
b. Un disco de mayor tamaño no puede descansar sobre uno más pequeño que él
mismo.
c. Sólo puedes desplazar el disco que se encuentre arriba en cada varilla.*/

var discos = 4;
var contador = 0;
var torreInicial = [];
var torreMedio = [];
var torreFin = [];

for(var i = discos; i > 0; i--){
  torreInicial.push(i);
}
//_________________________________________________________________
function hanoi2 (discos, torreInicial, torreFin, torreMedio){

  if (discos > 0){

    hanoi2(discos-1, torreInicial, torreMedio, torreFin);

    torreFin.push(torreInicial.pop());
    contador ++;

    console.log('\n\nTorre A: ' + torreInicial +
    '\nTorre B: ' + torreMedio +
    '\nTorre C: ' + torreFin );

    hanoi2(discos-1, torreMedio, torreFin, torreInicial)
  }
}
//____________________________________________________________


hanoi2(discos, torreInicial, torreFin, torreMedio )
console.log(contador);
