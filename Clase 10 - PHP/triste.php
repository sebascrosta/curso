<?php

class Triste extends Estado{
  public function come(){
    echo "No estoy de humor para comer tus milanesas quemadas, Rubén<br>";
    return $this;
  }

  public function toma(){
    echo "Sacame esta cerveza tibia de adelante porque te cago a bifes<br>";
    return $this;

  }

  public function mimo(){
    echo "Grasia ameo, ya me siento todo liso<br>";
    return new Alegre();
  }
}
