<?php

class Hambriento extends Estado{
  public function come(){
      echo "Gracias loco, tenía una lija tremenda, me siento re piola<br>";
      return new Alegre();
  }

  public function toma(){
      echo "Vos me ves con cara de que me guste la Manaos?<br>";
      return $this;
  }

  public function mimo(){
    echo "MAMÁ, SACÁ LA MANO DE AHÍ CARAJO<br>";
    return $this;
  }
}
