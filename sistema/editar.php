<?php
include("models/Cadastro.php");

$id = $_GET['id'];

$editar = new Cadastro();

$editar->editar($id);

$editar   = null;


