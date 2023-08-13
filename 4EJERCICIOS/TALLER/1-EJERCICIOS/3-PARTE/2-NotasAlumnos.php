<?php

    require_once("1-claseAlumnos.php");

    class notas extends Alumno {

        // Atributos

        private $notasArray = array(); // Dentro de "$notaasArray" se almacenaran las notas

        // Constructor

        public function __construct($nombreAlumno = "", $modalidadEstudio = "", $fichaAlumno = 0, $notasArray = array()) {

            parent::__construct($nombreAlumno, $modalidadEstudio, $fichaAlumno);

            $this -> notasArray = $notasArray();


        }

        // Get y Set



        // Metodos 

        // Funcion ingresar notas (max. 3)

        public function ingresarNotas(){
            $i = 0;
            while ($i <= 3) {

            }

        }

    }

    

?>