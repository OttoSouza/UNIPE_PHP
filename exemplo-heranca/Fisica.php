<?php

  class Fisica extends Pessoa {

    private $cpf;

    public function __construct($nome="", $cpf="") {

      // super do java;
      // utilizando o contrutor do pai;
      parent::__construct($nome);
      $this->cpf = $cpf;
    }

    public function validarCPF() { 
      echo "<p>A ser implementado no futuro</p>";
    }

  }
  
?>