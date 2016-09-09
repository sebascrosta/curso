<?php

/*20. Definir una variable $mascota​ que sea un array asociativo
a. En el índice animal​ debe decir qué animal es.
b. En el índice edad​ debe decir la edad.
c. En el índice altura​ debe decir la altura.
d. En el índice nombre​ debe decir el nombre
21. Recorrer los valores del array con un foreach​ imprimiendo (como ejemplo):
animal: perro
edad: 5
altura: 0,60
nombre: Sonic*/

$mascota = [];
$mascota["animal"] = "perro";
$mascota["edad"]   = 2;
$mascota["altura"] = "50 cm";
$mascota["nombre"] = "tyrion";

foreach ($mascota as $key => $value) {
  echo "$key: $value, <br>";
}
