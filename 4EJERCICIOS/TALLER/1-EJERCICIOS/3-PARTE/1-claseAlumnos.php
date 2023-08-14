<?php

    class profesoresParteTres {

        // Atributos

        private $idProfesor;
        private $nombreProfesore;
        
        // Constructor

        public function __construct(int $idProfesor ,string $nombreProfesore) {

            $this -> idProfesor = $idProfesor;
            $this -> nombreProfesore = $nombreProfesore;

        }

        // Get y Set

            // Id del Profesor
        public function setIdProfesor($idProfesor){
            $this -> idProfesor = $idProfesor;
        }

        public function getIdProfesor(){
            return $this -> idProfesor;
        }

            // Nombre profesor   
        public function setNombreProfesor($nombreProfesore){
            $this -> nombreProfesore = $nombreProfesore;
        }

        public function getNombreProfesor(){
            return $this -> nombreProfesore;
        }

        // Metodos

            // toString
        public function toString(){
                echo "Nombre: " . $this->nombreProfesore . " ID: " . $this->idProfesor . "<br>";
        }




    }

?>