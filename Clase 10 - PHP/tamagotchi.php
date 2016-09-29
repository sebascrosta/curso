<?php

class Tamagotchi{
    private $estado;

    public function come(){
        $this->estado = $this->estado->come();
    }

    public function toma(){
      $this->estado = $this->estado->toma();
    }

    public function mimo(){
      $this->estado = $this->estado->mimo();
    }

    public function __construct(){
      $this->estado = new Triste();
    }
  }
