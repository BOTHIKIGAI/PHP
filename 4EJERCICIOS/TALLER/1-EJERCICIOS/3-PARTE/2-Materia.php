<?php

    class materiaTercer {

        // Atributos

        public $nombreMateria;
        public $listaAlumnos = array();

        // Constructor

        public function __construct(string $nombreMateria) {
            $this -> nombreMateria = $nombreMateria;
        }

        // Get y set

            // NombreMateria
        public function setNombreMateria($nombreMateria) {
            $this -> nombreMateria = $nombreMateria;
        }

        public function getNombreMateria() {
            return $this -> nombreMateria;
        }

            // Lista de Alumnos
        public function setListaAlumnos($lisAlum){
            $this -> listaAlumnos = $lisAlum;
        }

        public function getListaAlumnos(){
            return $this -> listaAlumnos;
        }

        // Metodos

            // Agregar alumnos
        public function addEstudiante(EstudiantesTerceraParte $estudiante){
            $this -> listaAlumnos[] = $estudiante;
        }

            // toString
        public function toString() {
            echo "Materia: " . $this->nombreMateria . "<br>Alumnos:<br><br>";
        }



    }

?>