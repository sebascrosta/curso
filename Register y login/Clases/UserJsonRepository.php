<?php

require_once "Usuario.php";
require_once "UserRepository.php";

class UserJsonRepository extends UserRepository{
  public function guardarUsuario($miUsuario){
    if($miUsuario->getId()==null){
      $miUsuario->setId($this->traerNuevoId());
    }

    $miUsuarioArray = $this->usuarioToArray($miUsuario);
    $usuarioJson = json_encode($miUsuarioArray);
    file_put_contents("usuarios.json", $usuarioJson.PHP_EOL,FILE_APPEND);
  }

  private function traerNuevoId(){
    if(!file_exists("usuarios.json")){
      return 1;
    }
    $usuarios = file_get_contents("usuarios.json");
    $usuariosArray = explode(PHP_EOL, $usuarios);
    $ultimoUsuario = $usuariosArray[count($usuariosArray)-1];
    $ultimoUsuarioArray = json_decode($ultimoUsuario,true);
    return ($ultimoUsuarioArray["id"] + 1);
  }

  private function usuarioToArray($miUsuario){
    $usuarioArray=[];

    $usuarioArray["nombre"] = $miUsuario->getNombre();
    $usuarioArray["apellido"] = $miUsuario->getApellido();
    $usuarioArray["email"] = $miUsuario->getEmail();
    $usuarioArray["password"] =  $miUsuario->getPassword();
    $usuarioArray["id"] = $miUsuario->getId();

    return $usuarioArray;
  }
}
