<?php

namespace Classes;

class Gerente extends Funcionario { 
  private $projeto;

  public function __construct($nome="", $salario="", $projeto="") {
    parent::__construct($nome, $salario);
    $this->projeto = $projeto;
  }

  /**
   * Get the value of projeto
   */ 
  public function getProjeto()
  {
    return $this->projeto;
  }

  /**
   * Set the value of projeto
   *
   * @return  self
   */ 
  public function setProjeto($projeto)
  {
    $this->projeto = $projeto;

    return $this;
  }

  public function relatorioFunc() {
    parent::relatorioFunc();
    echo "Projeto: {$this->getProjeto()}";
  }
}


?>