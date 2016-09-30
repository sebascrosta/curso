<?php


abstract Class Cliente{
  protected $cuenta;
  private $email;
  private $pass;

  public function __construct(Cuenta $cuenta, $email,$pass){
    $this->cuenta = $cuenta;
    $this->setEmail($email);
    $this->setPass($pass);

  }

    public abstract function cobrarServicio();

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $this->email = $email;
      }else{
      throw new Exception ('El email es inválido');
    }
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = password_hash($pass, PASSWORD_DEFAULT);
    }

}
