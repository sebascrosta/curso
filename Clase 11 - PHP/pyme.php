<?php

class Pyme extends Cliente{
  private $cuit;
  private $razonSocial;

  public function setCuit($cuit){
    $this->cuit = $cuit;
  }
  public function getCuit(){
    return $this->cuit;
  }

  public function setrazonSocial($razonSocial){
    $this->razonSocial = $razonSocial;
  }
  public function getrazonSocial(){
    return $this->razonSocial;
  }


      public function setEmail($email){
        $this->email = $email;
      }
      public function getEmail(){
        return $this->email;
      }
      public function setPass($pass){
        $this->pass = $pass;
      }
      public function getPass(){
        return $this->pass;
      }
}
