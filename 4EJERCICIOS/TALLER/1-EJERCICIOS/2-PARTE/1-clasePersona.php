<?php

    class Persona{

        public $nombre;
        public $direccion;
        public $fechaNacimiento;
        public $genero;

        public function __construct( $nombre = "", $direccion = "", $fechaNacimiento = "", $genero = "") {

            $this -> nombre = $nombre;
            $this -> direccion = $direccion;
            $this -> fechaNacimiento = $fechaNacimiento;
            $this -> genero = $genero;

        }

        // Setters

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        public function setFechaNacimiento($fechaNacimiento) {
            $this->fechaNacimiento = $fechaNacimiento;
        }

        public function setGenero($genero) {
            $this->genero = $genero;
        }

        // Getters
        public function getNombre() {
            return $this->nombre;
        }

        public function getDireccion() {
            return $this->direccion;
        }

        public function getFechaNacimiento() {
            return $this->fechaNacimiento;
        }

        public function getGenero() {
            return $this->genero;
        }

        public function toString() {

            echo "Nombre: $this->nombre  Dirección $this->direccion  Fecha de nacimiento: $this->fechaNacimiento Genero: $this->genero";

        }

    }

?>