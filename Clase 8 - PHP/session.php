<?php

session_start();

if (!isset($_SESSION["RAND"])){
  $_SESSION["RAND"] = mt_rand();
}

echo $_SESSION['RAND'] . "<br>";

foreach ($_SESSION as $key => $value) {
  echo "$key  ====> $value <br>";
}

?>
