<?php

/* Utilizando switch, generar un número al azar entre 1 y 5 en la variable “$i”. En cada caso imprimir “i es igual a X”.*/

switch ($i = rand(1,5)) {
  case 1: echo "el numero es 1"; break;
  case 2: echo "el numero es 2"; break;
  case 3: echo "el numero es 3"; break;
  case 4: echo "el numero es 4"; break;
  case 5: echo "el numero es 5"; break;

    break;
}

echo "<br><br>";

switch ($i) {
  case 1: echo "el numero es 1"; break;
  case 2: echo "el numero es 2"; break;
  default: echo "el numero no es 1 ni 2"; break;
}
