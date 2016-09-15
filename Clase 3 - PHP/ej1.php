<?php
/*1. Crear un archivo imprimir.php​ que imprima la variable $_GET a través de un var_dump.*/

var_dump($_POST);
echo "<br><br><br><br><br>";
foreach ($_POST as $key => $value) {
  echo "$key ---> $value <br>";
}

if (!empty($_POST["checks"]))
$check = $_POST["checks"];

echo "<br><Br>";

foreach ($check as $value) {
  echo "$value ";
}

echo "<br><Br>";

echo "Variable: _SERVER: "; var_dump($_SERVER); echo "<br><br><br><br>";
echo "Variable: _FILES: "; var_dump($_FILES);echo "<br><br><br><br>";
echo "Variable: _REQUEST: "; var_dump($_REQUEST);echo "<br><br><br><br>";
echo "Variable: _SESSION: "; var_dump($_SESSION);echo "<br><br><br><br>";
echo "Variable: _ENV:  "; var_dump ($_ENV);echo "<br><br><br><br>";
echo "Variable: _COOKIE: "; var_dump($_COOKIE);echo "<br><br><br><br>";
echo "Variable: GLOBALS: "; var_dump($GLOBALS);echo "<br><br><br><br>";
