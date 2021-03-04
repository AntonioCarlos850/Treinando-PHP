<?php

    interface Veiculo
    {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function marcha($marcha);
    }

    class Civic implements Veiculo
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

    $carro = new Civic();

    $carro -> marcha(1);

?>