<?php

  class Produto {
    // atributos, publi c private
    private $codigo;
    private $nome;
    private $preco;
    
    //contrutor
    public function __construct($codigo="", $nome="", $preco="") {
      $this->codigo = $codigo;
      $this->nome = $nome;
      $this->preco = $preco;
    }

    //metodo representado por functions
    //-> acessar metodos, atributos
    //concatenaçao -> {}
    public function imprimeProduto() {
      echo "<p>Produto: {$this->nome}</p>";
      echo "<p>Preco:  {$this->preco}</p>";
    }

     //mandar para o usuario que a sessao dele expirou
     public function __destruct() {
       echo "<p>Finalizadou</p>";
     }
  }

?>