<?php

    class Pessoa{

        public $nome = "Rasmus Lerdof";
        protected $idade = 48;
        private $senha = "123456";

        public function verDados(){

            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>";

        }

    }

    class Progamador extends Pessoa{

        public function verDados()
        {
        echo get_class($this)."<br>";

        echo $this->nome;
        echo $this->idade;
        echo $this->senha;
        }

    }

    $objeto = new Progamador();

    $objeto->verDados();

?>