<?php
/*4. Crear un array numérico con 5 strings de animales diferentes. Luego de esto, ejecutar un var_dump
para ver los resultados.
Curso Desarrollo Web Full Stack
Clase 01 (PHP)
a. Agregar 2 nuevos animales al final del array, y ejecutar otro var_dump para ver los
resultados.
b. Imprimimos la siguiente oración “Me gustan los animales: animal1, animal2, ...” con los 7
animales que declaramos.
c. Reemplazar el primer animal por uno nuevo, e imprimir el resultado.
d. Agregar un nuevo animal en la posición 100, e imprimir el resultado.
e. Agregar un nuevo animal en la posición 16, e imprimir el resultado.*/

$animales = ['Perro', 'gato', 'conejo', 'vaca', 'orca'];

var_dump($animales);

$animales[] = 'Rata';
$animales[] = 'Pez';

echo '<br><br>';
var_dump($animales);
echo '<br><br>';

echo "Me gustan los animales $animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6]";

echo '<br><br>';
$animales [100] = 'comadreja';

print_r($animales);

echo '<br><br>';
$animales [16] = 'Ñandú';

print_r($animales);
