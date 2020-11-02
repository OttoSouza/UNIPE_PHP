<?php

  class Aplicacao { 
    public static $quantidade;

    public function __construct() {
      static::$quantidade++;
    }
  }

  $execucao1 = new Aplicacao();
  $execucao2 = new Aplicacao();

  echo Aplicacao::$quantidade . "<br/>"; 
  echo Aplicacao::$quantidade;

//   for ($i=0; $i < 10; $i++) {
//     echo $quantidade++."<br>";
// }

?>