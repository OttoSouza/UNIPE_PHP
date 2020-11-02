<?php

  include("inputs_name.php");
  include("models/Cadastro.php");

  $cadastrar = new Cadastro();


  $cadastrar->inserir($nome, $telefone, $email);


  $cadastrar = null;

  header("Location: index.php");
