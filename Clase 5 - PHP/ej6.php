<?php

/*Crear un archivo todoJunto.php​ que incluya el archivo funciones.php​ y superficie.php​ en donde
se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre
ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas*/

$funcionesEjecutadas = 0;

include 'ej3.php';
include 'ej4.php';

echo mayor(circulo(1), circulo(2), circulo(3));

echo '<br><br>'.$funcionesEjecutadas;
