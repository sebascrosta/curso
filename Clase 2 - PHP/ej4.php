<?php

/*Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea
verdadero, devolver “El número es mayor a 50”, en el caso que sea falso: “El número es
menor a 50”.*/

$numero = rand(1,100);

if($numero > 50){
  echo "El número es mayor a 50";
} else {
  echo "El número es menor a 50";
}
