<?php 
ini_set('display_errors', 1);
require_once "autoload.php";

// para usar os namespace, mapeamento virtual
use Classes\Funcionario;
use Classes\Gerente;
use Classes\Programador;

// capturar as informaçoes submetidas do formulario
$nome = $_POST["nome"];
$salario = $_POST["salario"];
$observacao = $_POST["observacao"]; // 1 para gerente , 2 para programador
$cargo = $_POST["cargo"];

// 2 etapa - instanciar um gerente ou um programador
if($cargo == 1) {
  $funcionario = new Gerente($nome, $salario, $observacao);

}else {
  $funcionario = new Programador($nome, $salario, $observacao);
}

$funcionario->relatorioFunc();

?>