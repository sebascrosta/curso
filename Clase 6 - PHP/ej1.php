<?php

/*
Crear una variable $a que contenga un array ( 'a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON'):
a. Hacer echo de la variable $a.
b. Utilizando json_encode, convertir el array en un json.
c. Hacer echo de la variable $a.
d. Crear una nueva variable $b que contenga el json_encode de la variable $a.
e. Hacer echo de $b.
f. Imprimir la frase “Yo <3 JSON | 1 | 2 |” utilizando los datos de la variable $b.
*/
$a = [
      'a' => 1,
      'b' => 2,
      'c' => 'YO <3 JSON',
     ];

// EJ A
foreach ($a as $key => $value) {
  echo $key.' => '. $value.'<br>';
}
echo '<br><br>';

// EJ B

$a = json_encode($a);

//EJ C

echo $a.'<br><br>';

// EJ D

$b = json_decode($a, true);

// EJ E

foreach ($b as $key => $value) {
  echo $key.' => '. $value.'<br>';
}
echo '<br><br>';

// EJ F

echo $b['c'].' | '.$b['a'].' | '.$b['b'];
