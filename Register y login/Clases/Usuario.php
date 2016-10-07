<?php

class Usuario{

  private $id;
  private $nombre;
  private $apellido;
  private $email;
  private $password;

  public function __construct(Array $miUsuario){
    $this->id = $miUsuario["id"];
    $this->nombre = $miUsuario["nombre"];
    $this->apellido = $miUsuario["apellido"];
    $this->email = $miUsuario["email"];
    $this->password = $miUsuario["password"];
  }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

}
