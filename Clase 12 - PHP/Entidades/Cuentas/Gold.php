<?php

class Gold extends Cuenta{
  public function debitar($monto, $origen){
      switch ($origen){
          case self::ORIGEN_LINK:
              $monto = $monto * 1.05;
              break;
      }

      $this->balance -= $monto;
      $this->actualizarFechaTransaccion();
  }

  public function acreditar($monto){
      if ($monto < 25000){
          $monto = $monto * 0.97;
      }

      parent::acreditar($monto);
  }
}
