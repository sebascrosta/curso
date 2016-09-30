<?php

require_once "require_classes.php";

$cliente = new Persona (new Classic("12345678-76321234567890"), "sebas.crosta@gmail.com", "contraseña", "Sebastián", "Crosta", 38028213, "20/12/1993");

$cliente->getCuenta()->acreditar(950);
echo $cliente->getCuenta()->getBalance();
