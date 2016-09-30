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


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = password_hach($pass, PASSWORD_DEFAULT);
    }

}
