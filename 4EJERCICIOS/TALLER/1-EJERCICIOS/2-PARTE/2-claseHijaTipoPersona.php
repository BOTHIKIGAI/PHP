<?php

    require_once("1-clasePersona.php");

    class TiPoPersona extends Persona{

        public $tipoPersona;

        public function __construct( $nombre = "", $direccion = "", $fechaNacimiento = "", $genero = "", $tipoPersona = "" ) {
        
            parent::__construct($nombre, $direccion, $fechaNacimiento, $genero);

            $this -> tipoPersona = $tipoPersona;
        
        }

        public function setTipoPersona($tipoPersona) {

            $this -> tipoPersona = $tipoPersona;

        }

        public function getTipoPersona() {

            return $this -> tipoPersona;

        }

        public function toString(){
            
            parent::toString();
            echo "Tipo de Persona: $this->tipoPersona";

        }


    }

?>