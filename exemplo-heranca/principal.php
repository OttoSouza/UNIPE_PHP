<?php 

  require_once "Pessoa.php";
  require_once "Fisica.php";
  require_once "Juridica.php";

  $fisica = new Fisica("Otto", "10171080483");
  $fisica2 = new Fisica();

  $fisica->validarCPF();
  $fisica2->validarCPF();

?>