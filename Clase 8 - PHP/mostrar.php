<!-- 1. Crear dos archivos. mostrar.php y modificar.php
a. mostrar.php únicamente debe imprimir $_SESSION[“contador”] (si existe).
b. modificar.php debe tener 2 botones. El primero debe decir “Reiniciar” y debe
poner $_SESSION[“contador”] en 0. El segundo debe decir “Incrementar” y
debe incrementar su valor en 1. Probar las modificaciones en mostrar.php. -->

<?php

session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar</title>
  </head>
  <body>
    <form action="modificar.php" method="post">
      <input type="submit" name="reiniciar" value="reiniciar">
      <input type="submit" name="incrementar" value="incrementar">
    </form>
  </body>
</html>
