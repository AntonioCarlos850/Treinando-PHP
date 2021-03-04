<?php

    class Pessoa{

        public $name;    //Atributo

        public function falar(){    //Método

            return "Seu nome é: ".$this->name;

        } 

    }

    $antonio = new Pessoa();
    $antonio->name = 'Antonio';
    echo $antonio->falar();

?>