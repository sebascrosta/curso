<?php

class CreadorMail extends Creador{
  public function crear(){
    return new Mail();
  }
}
