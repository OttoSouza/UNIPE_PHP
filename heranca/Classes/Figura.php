<?php

namespace Classes;
 abstract class Figura {
    protected $x;
    protected $y;

    abstract function mostrarArea();

    /**
     * Get the value of x
     */ 
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */ 
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     */ 
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */ 
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }
  }


?>