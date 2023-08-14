<?php

    require_once("2-Materia.php");

    class profesoresParteTres extends materiaTercer{

        // Atributos

        private $idProfesor; // almacenara un identificador para el maestro
        private $nombreProfesore;
        
        // Constructor

        public function __construct(int $idProfesor ,string $nombreProfesore, string $nombreMateria) {

            parent::__construct($nombreMateria);

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

            echo "Nombre del maestro: " . $this->nombreProfesore . " ID: " . $this->idProfesor . "<br><br>";
            parent::toString();
                
        }




    }

?>