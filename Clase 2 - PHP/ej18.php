<?php

/*18. Definir un array​ con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir
todos los números. La ejecución debe terminarse si alguno de los números encontrados es
un 5 (Se debe imprimir “Se encontró un 5!”)
a. Resolver este problema con un for​.
b. Resolver este problema con un while​.
c. Resolver este problema con un do/while​.*/

$array = [];

for ($i=0; $i < 10; $i++) {
  $array[$i] = rand(0,10);
}

print_r($array);

//EJ A

for ($i=0; $i <10 ; $i++) {
  if($array[$i] == 5){
    echo "Se encontró un 5!";
    break;
  }
}

//EJ B

$index = 0;

while ($index < 10) {
  if($array[$index] == 5){
     echo "Se encontró un 5!";
     break;
  }
  $index++;
}

//EJ C

$index = 0;

do{
  if($array[$index] == 5){
     echo "Se encontró un 5!";
     break;
  }
  $index++;
}while ($index<10);
