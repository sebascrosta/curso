<?php

class Alegre extends Estado{
  public function come(){
      echo "Acabo de bajonear un kilo de helado, no me jodas que largo todo<br>";
      return $this;
  }

  public function toma(){
    echo "No sé, no me jode tomar esto, pero no me cambia nada<br>";
    return $this;
  }

  public function mimo(){
    echo "Está re lindo esto, seguí.<br>";
    return $this;
  }
}
