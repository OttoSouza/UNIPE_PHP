<?php

    namespace Classes;

    class ContaCorrente extends Conta
    {
        public function saca($valor) 
        {
            // acessar a constante de uma classe pai, usa parent
            echo parent::AGENCIA;

            if($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo()-$valor-0.1);
            }
            else {
                echo "Saldo insuficiente";
            }
        }
    }

?>

