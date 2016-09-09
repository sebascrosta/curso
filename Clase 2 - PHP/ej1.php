<?php
/*Definir dos variable con números y compararlos con un if para decidir cuál número
      es mayor e imprimir “El número mayor es N​” donde N ​sea el valor de la variable que
resultó ser mayor mayor.
a. Al ejercicio anterior agregar un else para cubrir el caso inverso.*/

$numero1 = 2;
$numero2 = 1;

if ($numero1 > $numero2){
  echo "$numero1 es mayor que $numero2";
}

echo '<br>';

if ($numero2 > $numero1){
  echo "$numero2 es mayor que $numero1";
}

echo '<br>';
//Con else


if ($numero1 > $numero2){
  echo "$numero1 es mayor que $numero2";
} else {

  echo "$numero2 es mayor que $numero1";
}
