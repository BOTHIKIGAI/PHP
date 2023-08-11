<?php

    class Alumno {

        // Atributos

        private $nombreAlumno;
        private $modalidadEstudio;
        private $fichaAlumno;

        // Constructor

        public function __construct($nombreAlumno = "", $modalidadEstudio = "", $fichaAlumno = 0) {

            $this -> nombreAlumno = $nombreAlumno;
            $this -> modalidadEstudio = $modalidadEstudio;
            $this -> fichaAlumno = $fichaAlumno;

        }

        // setters

        public function setNombreAlumno($nombreAlumno){
            $this -> nombreAlumno = $nombreAlumno;
        }

        public function setModalidadEstudio($modalidadEstudio){
            $this -> modalidadEstudio = $modalidadEstudio;
        }

        public function setFichaAlumno($fichaAlumno) {
            $this -> fichaAlumno = $fichaAlumno;
        }

        // getters

        public function getNombreAlumno() {
            return $this -> nombreAlumno;
        }

        public function getModalidadEstudio() {
            return $this -> modalidadEstudio;
        }

        public function getFichaAlumno() {
            return $this -> fichaAlumno;
        }

        

    }

?>