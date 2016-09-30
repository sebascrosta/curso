<?php

abstract class Cuenta
{
   const ORIGEN_BANELCO = 1;
   const ORIGEN_LINK = 2;
   const ORIGEN_CAJA = 3;
   const ORIGEN_SERVICIO = 4;
   const ORIGEN_LIQUIDACION = 5;

   protected $CBU;
   protected $balance;
   protected $fechaUltimoMovimiento;

   public function __construct($CBU){
      $this->CBU = $CBU;
   }

   public function getCBU(){
      return $this->CBU;
   }

   public function getBalance(){
      return $this->balance;
   }

   public function getfechaUltimoMovimiento(){
      return $this->fechaUltimoMovimiento;
   }

   public abstract function debitar ($monto, $origen);
   public function acreditar($monto){
     $this->balance += $monto;
     $this->actualizarFechaTransaccion();
   }

   protected function actualizarFechaTransaccion(){
     $this->fechaUltimoMovimiento = date("Y-m-d H:i:s");
   }
}
