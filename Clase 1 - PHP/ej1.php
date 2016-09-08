<!-- 1. Crear las siguientes variables y mostrarlas utilizando echo y var_dump:
a. Una variable con un número entero.
b. Una variable con un número decimal.
c. Una variable con un carácter, utilizando comillas dobles.
d. Una variable con un carácter, utilizando comillas simples.
e. Una variable con una cadena, utilizando comillas simples.
f. Una variable con una cadena, utilizando comillas dobles.
g. A la variable del punto a​, asignarle una cadena de caracteres.
h. A la variable del punto e​, asignarle un número decimal.
i. ¿Qué sucede con el tipo de dato de las variable del punto g​ y punto h?​
j. ¿Qué sucede si a la variable del punto a​ le asignamos otro valor numérico, pero encerrado entre comillas?  -->

<?php

$entero = 4;
$decimal = 4.2;
$caracterDobles = "d";
$caracterSimples = 's';
$cadenaDobles = "Cadena ingresada con comillas dobles";
$cadenaSimples = "Cadena ingresada con comillas simples";

echo($entero);
echo('<br>');
echo($decimal);
echo('<br>');
echo($caracterDobles);
echo('<br>');
echo($caracterSimples);
echo('<br>');
echo($cadenaDobles);
echo('<br>');
echo($cadenaSimples);
echo('<br>');
echo('<br>');
echo('<br>');

var_dump($entero);
echo('<br>');
var_dump($decimal);
echo('<br>');
var_dump($caracterDobles);
echo('<br>');
var_dump($caracterSimples);
echo('<br>');
var_dump($cadenaDobles);
echo('<br>');
var_dump($cadenaSimples);
echo('<br>');
echo('<br>');

$entero = 'Una cadena de caracteres';

echo $entero;
echo '<br>';
var_dump($entero);
echo '<br>';
echo '<br>';

$cadenaSimples = 8.3;

echo $cadenaSimples;
echo '<br>';
var_dump($cadenaSimples);
echo '<br>';
echo '<br>';

$entero = '8';

echo $entero;
echo '<br>';
var_dump($entero);
echo '<br>';
echo '<br>';

?>
