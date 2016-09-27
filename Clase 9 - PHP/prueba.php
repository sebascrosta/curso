<?php

include "cliente.php";

$cliente2 = new Cliente("Carlos", "Perez", "12382392");

$cliente2->setFechaNac("22/13/2016");
$cliente2->setMail("cperezgmail.com");
$cliente2->setPassword("mipassword");

$cliente2->saludar();
echo "<br>".$cliente2->getFechaNac() ."<br>";
echo $cliente2->getMail() ."<br>";
echo $cliente2->getPassword()."<br>";

 ?>
