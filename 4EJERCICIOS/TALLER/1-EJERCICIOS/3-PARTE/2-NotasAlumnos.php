<?php

    require_once("1-claseAlumnos.php");

    class notas extends Alumno {

        // Atributos

        private $nota1;
        private $nota2;
        private $nota3;

        // Constructor

        public function __construct($nombreAlumno = "", $modalidadEstudio = "", $fichaAlumno = 0, $nota1 = 0, $nota2 = 0, $nota3 = 0) {

            parent::__construct($nombreAlumno, $modalidadEstudio, $fichaAlumno);

            $this -> nota1 = $nota1;
            $this -> nota2 = $nota2;
            $this -> nota3 = $nota3;

        }

        // Get y Set

        public function setNotas($notas1) {
            $this -> nota1 = $notas1;
        }

        public function getNotas() {
            return $this -> nota1;
        }

        public function setNotas($notas2) {
            $this -> nota2 = $notas2;
        }

        public function getNotas() {
            return $this -> nota2;
        }

        public function setNotas($notas1) {
            $this -> nota1 = $notas1;
        }

        public function getNotas() {
            return $this -> nota1;
        }

        // Funcion ingresar notas (max. 3)

        public function ingresarNotas(){

            $i = 0;

            while ($i <= 3) {



            }

        }

    }

    

?>