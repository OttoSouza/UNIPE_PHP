<?php

    namespace Classes;

   abstract class Conta
    {
        protected $saldo;

        //constante
        const AGENCIA = "Banco d o Brasil UFPB";

        public function __construct($saldo=0) {
            $this->saldo = $saldo;
        }  

      

        /**
         * Get the value of saldo
         */ 
        public function getSaldo()
        {
                return $this->saldo;
        }

        /**
         * Set the value of saldo
         *
         * @return  self
         */ 
        public function setSaldo($saldo)
        {
                $this->saldo = $saldo;

                return $this;
        }

        final function deposita($valor) 
        {
            $this->setSaldo($this->getSaldo()+$valor);
        }

        public function saca($valor) 
        {
            if($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo()-$valor);
            }
            else {
                echo "Saldo insuficiente";
            }
        }

        public function imprimeExtrato() {
            //self para a propria classe acessar as proprias constantes;
            echo self::AGENCIA;
            echo "<p>Saldo: R$ {$this->getSaldo()}</p>";
        }
    }

    // 1primeira maneira
    echo Conta::AGENCIA;

?>