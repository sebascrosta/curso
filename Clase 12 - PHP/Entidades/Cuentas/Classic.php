<?php

class Classic extends Cuenta{
  public function debitar($monto, $origen){
    switch ($origen) {
      case self::ORIGEN_BANELCO:
        $monto = $monto * 1.05;
        break;

        case self::ORIGEN_LINK:
          $monto = $monto * 1.10;
          break;
    }

    $this->balance -= $monto;
    $this->actualizarFechaTransaccion();

  }

  public function acreditar ($monto){
    $monto = $monto * 0.95;
    parent::acreditar($monto);
  }


}
