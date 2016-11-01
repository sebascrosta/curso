<?php

class Black extends Cuenta{
  public function debitar($monto, $origen){
    $this->balance -= $monto;
  }

  public function acreditar ($monto){
      if($monto > 1000000){
          $monto = monto*0.96;
      }

      parent::acreditar($monto);
  }
}
