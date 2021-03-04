<?php

interface Veiculo
    {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function marcha($marcha);
    }

    abstract class Automovel implements Veiculo
    {
        public function acelerar($velocidade)
        {

            echo "O veículo acelerou até ".$velocidade. " km/h";

        }
        public function frenar($velocidade){

            echo "O veículo frenou em ".$velocidade." km/h";

        }

        public function marcha($marcha){

            echo "O veículo foi na marcha ".$marcha;

        }
    }

    class DelRey extends Automovel
    {

        public function empurrar()
        {

        }

    }

    $carro = new DelRey();

    //var_dump($carro);

    $carro -> marcha(1);

?>