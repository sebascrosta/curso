<?php

/*Utilizando un while​ haremos un programa que tiré una moneda (seleccionará un número al
azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe
imprimir cuantos tiros de monedas llevó obtener 5 veces cara.*/

$vecesCara = 0;
$tirosTotales = 0;


while ($vecesCara < 5){
  if (rand(0,1) == 1){
    $vecesCara++;
  }
  $tirosTotales++;
}

echo "Se necesitaron $tirosTotales para llegar a las cinco caras seguidas";
