<?php

  $id = $_GET['id'];

  $servidor = new PDO('mysql:host=localhost;dbname=livros', 'root', '');

  $tabela = $servidor->query("DELETE FROM famosos where id = $id");

  $servidor = null;

  header("Location: select.php");
?>