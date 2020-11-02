<?php 

  require_once "classes/Funcionario.php";
  require_once "classes/Gerente.php";
  require_once "classes/Programador.php";

  $funcionario = new Funcionario("Otto", 1000);
  $gerente = new Gerente("Otto", 2000);
  $programador = new Programador("Otto", 2000, "React");

  $programador->relatorioFunc();

?>