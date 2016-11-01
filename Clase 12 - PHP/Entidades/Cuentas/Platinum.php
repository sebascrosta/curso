<?php

class Platinum extends Cuenta{

    public function debitar($monto, $origen){
        if($this->balance < 5000){
            $monto = $monto*1.05;
        }

        $this->balance -= $monto;
        $this->actualizarFechaTransaccion();
    }

    public function acreditar ($monto){
        parent::acreditar($monto);
    }
}
