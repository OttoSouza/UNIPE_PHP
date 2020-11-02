<?php
include("models/Cadastro.php");

$id = $_GET['id'];

$excluir = new Cadastro();

$excluir->deletar($id);

$excluir   = null;

header("Location: index.php");
