<?php
namespace Classes;
class Triangulo extends Figura {

  public function mostrarArea() {
    echo (($this->x * $this->y) /2);
  }
}
?>