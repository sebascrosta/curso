<?php

class Validator{
  private function __construct(){}

  public static function validarUsuario($miUsuario){
    $errores = [];

    if(trim($miUsuario["nombre"])==""){
      $errores[]= "Falta el nombre";
    }

    if(trim($miUsuario["apellido"])==""){
      $errores[]= "Falta el apellido";
    }

    if(trim($miUsuario["email"])==""){
      $errores[]= "Falta el email";
    }

    if(!filter_var($miUsuario["email"], FILTER_VALIDATE_EMAIL)){
      $errores[]= "El mail no es válido";
    }

    if(trim($miUsuario["password"])==""){
      $errores[]= "Falta el password";
    }

    if(trim($miUsuario["password2"])==""){
      $errores[]= "Falta la confirmación de password";
    }

    if($miUsuario["password"] != $miUsuario["password2"]){
      $errores[]= "Las contraseñas no coinciden";
    }
    return $errores;
  }
}
