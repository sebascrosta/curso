<?php
/*Utilizando un do/while​ realizar un programa que tire la moneda hasta que se obtenga cara
(el número 1). Al final del programa imprimir cuantos tiros de moneda llevó.*/

$tirosTotales = 0;

do{
  $tirosTotales++;
}while(!rand(0,1));

echo "Se necesitaron $tirosTotales para lograr cara";
