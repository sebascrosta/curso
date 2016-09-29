<?php
/*Crear una clase abstracta Cuenta con atributos: CBU, Balance, Fecha de último
movimiento. Agregar setters y getters para obtener los datos de la cuenta. Agregar un
constructor que permite inicializar el CBU.*/
abstract class Cuenta {
  private $cbu;
  private $balance;
  private $ultimoMovimiento;

  abstract public function setCbu($cbu);
  abstract public function getCbu();
  abstract public function setBalance($balance);
  abstract public function getBalance();
  abstract public function setUltimoMovimiento($ultimoMovimiento);
  abstract public function getUltimoMovimiento();

  public function __construct()
  {
    $this->cbu = rand(10000000000,99999999999);
  }
}
