<?php

    interface IAnimal {
        public function comer();
        public function emiteSonido();
        public function correr();
        

    }

    class Perro implements IAnimal {

        private $raza;

        private $tamano;

        private $color;

        public function __construct( string $raza, string $color, string $tamano) {
            $this -> raza = $raza;
            $this -> tamano = $tamano;
            $this -> color = $color;
        }

        public function emiteSonido() {
            echo "Guaaa" . "<br>";
        }

        public function correr() {
            echo "corriendo como perro" . "<br>";
        }

        public function comer(){
            echo "comiendo como perro" . "<br>";
        }


        public function getRaza() {
            return $this -> raza;

        }

        public function getTamano() {
            return $this -> tamano;

        }

        public function getColor() {
            return $this -> color;

        }

        public function setRaza() {
            return $this -> raza;

        }

        public function setTamano() {
            return $this -> tamano;

        }

        public function setColor() {
            return $this -> color;

        }

        public function toString() {
            echo "Raza: $this->raza Tamaño: $this->tamano Color: $this->color <br>";
        }


    }

    // clase gato

    class Gato implements IAnimal {
        public function emiteSonido() {
            echo "meeeooooowww!!!!" . "<br>";
        }

        public function correr() {
            echo "corriendo Corre" . "<br>";
        }

        public function comer() {
            echo "comiendo como gato" . "<br>";
        }
    }

?>