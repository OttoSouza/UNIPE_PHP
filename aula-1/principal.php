<?php 
  // include -> avisa uma mensagem de erro caso nao ache o script. aplicaçao continua a ser executada
  // require -> é gerado um fatal erro, e a execuçao sera parada
  // require_once -> importacao seja feita uma unica vez, nao gerar importacao mais de uma vez.
  //executar uma instancia de classe
  require_once "Produto.php";

  $produto = new Produto("001", "Iphone", 320);
  
  // $produto->codigo = "001";
  // $produto->nome = "Iphone";
  // $produto->preco = "5000.00";

  $produto->imprimeProduto();

  $produto = null;
  
?>