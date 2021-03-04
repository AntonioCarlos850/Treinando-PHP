<?php

    class Carro{

        private $modelo;
        private $motor;
        private $cor;

        public function getModelo(){

            return $this->modelo;

        }

        public function getMotor(){

            return $this->motor;

        }

        public function getCor(){

            return $this->cor;

        }

        public function setModelo($modelo){

            $this->modelo = $modelo;

        }

        public function setMotor($motor){

            $this->motor = $motor;

        }

        public function setCor($cor){

            $this->cor = $cor;

        }

        public function exibir(){

            return array(
                "Modelo" => $this->getModelo(),
                "Motor" => $this->getMotor(),
                "Cor" => $this->getCor()
            );

        }

    }

    $gol = new Carro();
    $gol->setModelo('Gol Bolinha');
    $gol->setMotor('1.6');
    $gol->setCor('Amarelo');

    print_r($gol->exibir());

?>