<?php

class BotonNuevo{
  private $miCreador;

  public function setCreador($elCreador){
    $this->miCreador = $elCreador;
  }

  public function click(){
    $this->miCreador->Crear();
  }
}
