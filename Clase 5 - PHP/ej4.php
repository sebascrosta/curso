<?php
/*4. Generar un archivo llamado superficie.php:​
a. Definir una función triangulo() que retorne su superficie.
b. Definir una función rectangulo() que retorne su superficie.
c. Definir una función cuadrado() que retorne su superficie.
d. Utilizando la función pi(), definir una función circulo() que retorne su superficie.*/

function triangulo ($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return ($base * $altura)/2;

}

function rectangulo ($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base * $altura;

}

function cuadrado ($lado){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $lado ** 2;

}

function circulo ($radio){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return pi() * ($radio ** 2);

}

?>
