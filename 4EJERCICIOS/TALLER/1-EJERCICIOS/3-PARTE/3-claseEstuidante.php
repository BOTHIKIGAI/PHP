<?php

    class EstudiantesTerceraParte  {
        
        // Atributos

        public $IDestudiante; // Almacenara el ID (identificador) del estudiante en un int
        public $nombreEstudiante; // almacenara el nombre del Estudiante en un string 
        public $edadEstudiante; // almacenar la edad del estudiante en un int
        public $modalidadAprendizaje; // almacenara si estudia de manera presencial o virtual, este sera string

        // Constructor
        public function __construct(int $idEs, string $NomEs, int $edadEs, string $modaApre) {
            $this -> IDestudiante = $idEs;
            $this -> nombreEstudiante = $NomEs;
            $this -> edadEstudiante = $edadEs;
            $this -> modalidadAprendizaje = $modaApre;
        }

        // Get y Set

            // Identificador del Estudiante (ID)

        public function setIdEstudiante($IDestudiante){
            $this -> IDestudiante = $IDestudiante;
        }

        public function getIdEstudiante(){
            return $this -> IDestudiante;
        }

        public function setNombreEstudiante($nombre) {
            $this->nombreEstudiante = $nombre;
        }
    
        public function getNombreEstudiante() {
            return $this->nombreEstudiante;
        }
    
        public function setEdadEstudiante($edad) {
            $this->edadEstudiante = $edad;
        }
    
        public function getEdadEstudiante() {
            return $this->edadEstudiante;
        }

        public function setModalidadAprendizaje($modalidad) {
            $this->modalidadAprendizaje = $modalidad;
        }
    
        public function getModalidadAprendizaje() {
            return $this->modalidadAprendizaje;
        }

        // Metodos

            // toString

        public function toString(){
           echo "ID: " . $this->IDestudiante . "<br> Nombre: " . $this->nombreEstudiante . " Edad: " . $this->edadEstudiante . " Modalidad de Aprendizaje: " . $this->modalidadAprendizaje . "<br>";
        }

    }

?>