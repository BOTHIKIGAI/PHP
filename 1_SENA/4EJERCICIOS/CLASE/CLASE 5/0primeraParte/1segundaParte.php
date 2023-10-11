<?php 

    require_once("0primerParte.php");

    class Carro extends Vehiculo {

        private $marca = "";
        private $color = "";
        private $modelo = "";

        public function __construct(string $mark, string $col, string $model, int $nroP, int $nroR, string $tipo) {

            parent::__construct($tipo, $nroR, $nroP);

            $this->marca = $mark;
            $this->color = $col;
            $this->modelo =$model;

        }

        // Setters
        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function setColor($color) {
            $this->color = $color;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        // Getters
        public function getMarca() {
            return $this->marca;
        }

        public function getColor() {
            return $this->color;
        }

        public function getModelo() {
            return $this->modelo;
        }


        public function toSting() {
            parent::toSting();
            echo " Marca:" . $this->marca . "Color: " . $this->color . "Modelo: " . $this->modelo . "<br>";
        }

    }

?>