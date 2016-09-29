<?php
require_once "tamagotchi.php";
require_once "estado.php";
require_once "alegre.php";
require_once "triste.php";
require_once "hambriento.php";
require_once "sediento.php";

$miTamagotchi = new Tamagotchi();
$miTamagotchi->mimo();
$miTamagotchi->come();
