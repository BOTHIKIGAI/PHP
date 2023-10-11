<?php

    class PersonaBase {

        public $nombre;
        public $direccion;
        public $fechaNacimiento;
        public $genero;
        public $tipoPersona;

        public function __construct( $nombre = "", $direccion = "", $fechaNacimiento = "", $genero = "", $tipoPersona = "General") {

            $this -> nombre = $nombre;
            $this -> direccion = $direccion;
            $this -> fechaNacimiento = $fechaNacimiento;
            $this -> genero = $genero;
            $this -> tipoPersona = $tipoPersona;

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

        public function setTipoPersona($tipoPersona) {  
            $this->tipoPersona = $tipoPersona;
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

        public function getTipoPersona() {
            return $this->tipoPersona;
        }

        // Metodos

        // 1. toString 

        public function toString() {

            echo "Nombre: $this->nombre  Dirección: $this->direccion  Fecha de nacimiento: $this->fechaNacimiento Genero: $this->genero Tipo persona: $this->tipoPersona";

        }

    }

?>