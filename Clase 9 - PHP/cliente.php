<?php

/*Crear una clase Cliente con las siguientes propiedades públicas:
a. Nombre
b. Apellido
c. Documento
d. Fecha de Nacimiento
e. Email
f. Password*/

class Cliente
{
  private $nombre;
  private $apellido;
  private $documento;
  private $fecha_nac;
  private $mail;
  private $password;

  public function __construct($nombre, $apellido, $doc)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $doc;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  public function getDocumento(){
    return $this->documento;
  }

  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getFechaNac(){
    return $this->fechaNac;
  }

  public function setFechaNac($fechaNac){
    $fecha = explode('/', $fechaNac);
    if (checkdate($fecha[1], $fecha[0], $fecha[2])){
      $this->fechaNac = $fechaNac;
    }else{
      $this->fechaNac = '1/1/1900';
    }
  }

  public function getMail(){
    return $this->mail;
  }

  public function setMail($mail){
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
      $this->mail = $mail;
    }else{
    $this->mail = "Email inválido";
    }
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($password){
    $this->password = password_hash($password, PASSWORD_BCRYPT);
  }

  public function saludar(){
    echo ("Hola, mi nombre es " . $this->getNombre() . " ". $this->getApellido());
  }
}


 ?>
