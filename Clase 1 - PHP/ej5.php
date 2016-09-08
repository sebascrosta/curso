<?php

/*Crear un array asociativo que contenga las siguientes propiedades de un auto: Marca, Modelo,
Color, Año, y Patente. Luego de esto, ejecutar un var_dump para ver los resultados.
a. Agregar el nombre del dueño en la posición 0 del array, e imprimir el resultado.
b. Agregar la empresa aseguradora en la posición 14, e imprimir el resultado.
c. Agregar el número de la póliza de seguro en la posición “poliza”, e imprimir el resultado.
d. Modificar el número de patente, e imprimir el resultado.
e. Modificar el nombre del dueño, e imprimir el resultado.*/

$auto = [ "marca" => "Renault",
          "modelo" => "Kangoo",
          "color" => "Rojo",
          "anio" => 2012,
          "patente" => "LYS108",
];
echo 'EJ A <br>';
var_dump($auto);
echo '<br><br>';

echo 'EJ B <br>';
$auto[0] = "Pablo";
var_dump($auto);

echo '<br><br>';
echo 'EJ C <br>';
$auto[14] = "Sancor Seguros";
var_dump($auto);
echo '<br><br>';

echo 'EJ D <br>';
$auto["patente"] = 'AAA000';
var_dump($auto);
echo '<br><br>';

echo 'EJ E <br>';
$auto[0] = 'Fabiana';
var_dump($auto);
echo '<br><br>';

 ?>
