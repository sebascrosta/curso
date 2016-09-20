<!-- 1. Crear dos archivos. mostrar.php y modificar.php
a. mostrar.php únicamente debe imprimir $_SESSION[“contador”] (si existe).
b. modificar.php debe tener 2 botones. El primero debe decir “Reiniciar” y debe
poner $_SESSION[“contador”] en 0. El segundo debe decir “Incrementar” y
debe incrementar su valor en 1. Probar las modificaciones en mostrar.php. -->

<?php

  if (isset($_POST["reiniciar"])){
    reiniciar();
  }

  if (isset($_POST["incrementar"])){
    incrementar();
  }

function incrementar(){
  $contador = file_get_contents("contador.txt");
  $contador++;
  file_put_contents("contador.txt", $contador);
}

function reiniciar(){
  if (file_exists("contador.txt")){
    file_put_contents("contador.txt", "0");
  } else {
    $f = fopen("contador.txt", "w+");
    fwrite($f, "0");
 }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar</title>
  </head>
  <body>
    <?php foreach ($_POST as $key => $value): ?>
      <h3><?php echo "$key ==> $value <br>"; ?></h3>
    <?php endforeach; ?>
  </body>
</html>
