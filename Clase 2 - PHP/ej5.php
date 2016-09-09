<?php

// Generar un número aleatorio entre 0 y 100. Si es mayor a 50 y par se imprimirá “El número
// pasa la condición”. De lo contrario se imprimirá “El número NO pasa la condición”
// a. Modificaremos al ejercicio anterior para que también pase la condición el número 0

$numero = rand(0,100);

if ( ($numero > 50 && $numero%2 == 0) || $numero == 0){
  echo "El numero cumple la condición <br>";
}
