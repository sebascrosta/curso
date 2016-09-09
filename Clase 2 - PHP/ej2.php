<?php

/*Utilizando la función  rand(x,y), donde “x” es el número mínimo e “y” el número máximo,
generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable si y
sólo si el número generado es 3 o 5.*/

$numero = rand(1,5);

if ($numero != 3){
  echo "El número no es 3";
} else {
  echo $numero;
}
