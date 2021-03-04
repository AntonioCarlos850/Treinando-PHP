<?php

    class Endereco{

        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($logradouro, $numero, $cidade)
        {
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->cidade = $cidade;
        }

        public function __destruct(){}

        public function getLogradouro()
        {
            return $this->logradouro;

        }

        public function setLogradouro($logradouro)
        {
            $this->logradouro = $logradouro;

        }


        public function getNumero()
        {
            return $this->numero;

        }

        public function setNumero($numero){

            $this->numero = $numero;

        }

        public function getCidade()
        {
            return $this->cidade;

        }

        public function setCidade($cidade)
        {
            $this->cidade = $cidade;

        }

        public function __toString()
        {
            return "Logradouro: ".$this->logradouro.", Número: ".$this->numero.", Cidade: ".$this->cidade;
        }


    }

    $meuEndereco = new Endereco("Avenida Araucária","780","Foz do Iguaçu");

    //var_dump($meuEndereco);
    echo $meuEndereco;
    
    unset($meuEndereco);

?>