<?php

require_once "Clases/Usuario.php";
require_once "Clases/Validator.php";
require_once "Clases/JsonRepository.php";

$tipoRepositorio = "json";
$repositorio = null;

if ($tipoRepositorio == "json"){
  $repositorio = new JsonRepository();
}
