<?php

/*13. Modificar el ejercicio anterior para que en vez de frenar en el número 100 frene en un
número generado aleatoriamente entre 0 y 100.*/

for ($i=0; $i < rand(0, 100); $i++) {
  echo "$i ";
}
