<?php

    namespace CLiente;

    class Cadastro extends \Cadastro
    {

        public function registrarVenda(){

            echo "Foi registrada uma venda para: ".$this->getNome();

        }

    }

?>