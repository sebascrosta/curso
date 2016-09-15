<?php
/*3. Generar un archivo llamado funciones.php:​
a. Definir una función mayor() que reciba 3 números y devuelva el mayor.
b. Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un
array con la secuencia de números desde el numero base hasta el numero limite.
c. Definir una constante llamada numeroMagico, y que contenga un número.$name
d. Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con
numeroMagico.
e. Modificar tabla para que si recibe un sólo parámetro utilice numeroMagico como límite.*/

define('numeroMagico', 6);

function mayor ($num1, $num2, $num3 = numeroMagico){

  global $funcionesEjecutadas;
  $funcionesEjecutadas++;

  if ($num1 > $num2 && $num1 > $num3){
    return $num1;
  }

  if ($num2 > $num1 && $num2 > $num3){
    return $num2;
  }

  if ($num3 > $num2 && $num3 > $num1){
    return $num3;
  }

}

function tabla ($base, $limite = numeroMagico){

  if ($base != 0){
    $resultado = 0;
    while ($resultado < $limite){
      $resultado += $base;
      if ($resultado < $limite)
        echo $resultado. ' ';
    }
  }
}
