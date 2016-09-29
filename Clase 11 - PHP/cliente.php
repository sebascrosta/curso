<?php

//Defino variables privadas para la clase Cliente

abstract Class Cliente{
  private $email;
  private $pass;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($email,$pass){
    $this->email = $email;
    $this->pass = $pass;

  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado


    abstract public function setEmail($email);
    abstract public function getEmail();
    abstract public function setPass($pass);
    abstract public function getPass();


  }
