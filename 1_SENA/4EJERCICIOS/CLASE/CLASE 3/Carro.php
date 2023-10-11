<?php 

        abstract class Carro {

        private string $nombre;

        public function __construct(string $name) {
            $this -> nombre = $name;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function setNombre(string $name) {
            $this -> nombre = $name;
        }

        abstract public function presentarCarro();

    }


    // clases hijas

    class Audi extends Carro {
        
        public function __construct(string $name) {
            parent::__construct($name);
        }

        public function presentarCarro() {
            echo "Gran calidad alemana " . parent::getNombre()."<br>";
        }
    }

    class Tesla extends Carro {
        
        public function __construct(string $name) {
            parent::__construct($name);
        }

        public function presentarCarro() {
            echo "Orgullo EEUU " . parent::getNombre()."<br>";
        }
    }


    class Renault extends Carro {
    
        public function __construct(string $name) {
            parent::__construct($name);
        }

        public function presentarCarro() {
            echo "Calidad francesa ".parent::getNombre()."<br>";
        }
    }


    class Honda extends Carro {

        public function __construct(string $name) {
            parent::__construct($name);
        }

        public function presentarCarro() {
            echo "Extravagancia Japonesa ".parent::getNombre()."<br>";
        }
    }



?>