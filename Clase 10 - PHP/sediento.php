<?php

class Sediento extends Estado{
  public function come(){
      echo "Tengo sed y me venís con estas papas re saladas? Te voy a matar<br>";
      return $this;
  }

  public function toma(){
    echo "Uh, sí, una coca bien fría, no veamo y no besemo<br>";
    return new Alegre();
  }

  public function mimo(){
    echo "Saca la mano Antonio, que mamá está en la cocina<br>";
    return $this;
  }
}
