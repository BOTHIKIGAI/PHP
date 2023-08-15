<?php

    class EstudiantesTerceraParte  {
        
        // Atributos

        public $IDestudiante; // Almacenara el ID (identificador) del estudiante en un int
        public $nombreEstudiante; // almacenara el nombre del Estudiante en un string 
        public $edadEstudiante; // almacenar la edad del estudiante en un int
        public $modalidadAprendizaje; // almacenara si estudia de manera presencial o virtual, este sera string
        public $nota1; // almacenara la nota 1
        public $nota2; // almacenara la nota 2
        public $nota3; // almacenara la nno 3

        // Constructor
        public function __construct(int $idEs, string $NomEs, int $edadEs, string $modaApre, int $n1, int $n2, int $n3) {
            $this -> IDestudiante = $idEs;
            $this -> nombreEstudiante = $NomEs;
            $this -> edadEstudiante = $edadEs;
            $this -> modalidadAprendizaje = $modaApre;
            $this -> nota1 = $n1;
            $this -> nota2 = $n2;
            $this -> nota3 = $n3;
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

        public function setNota1($nota1) {
            $this->nota1 = $nota1;
        }
    
        public function getNota1() {
            return $this->nota1;
        }
    
        public function setNota2($nota2) {
            $this->nota2 = $nota2;
        }
    
        public function getNota2() {
            return $this->nota2;
        }
    
        public function setNota3($nota3) {
            $this->nota3 = $nota3;
        }
    
        public function getNota3() {
            return $this->nota3;
        }

        // Metodos

        // Metodos - toString
        public function toString(){

            echo "ID: " . $this->IDestudiante . "<br> Nombre: " . $this->nombreEstudiante . " Edad: " . $this->edadEstudiante . " Modalidad de Aprendizaje: " . $this->modalidadAprendizaje . " Notas: ". $this->nota1 . ", " . $this->nota2 . ", " . $this->nota3 . "<br>";

            $notaPromedio = ($this->nota1+$this->nota2+$this->nota3)/3;
                // obtengo el promedio del alumno

            // lo realizo dentro del echo para conocer directamente, si aprueba o no
            
            // Inicio condicionales con el cual depenediendo del valor de su nota retorno un echo que indica si aprueba o no

            if ($notaPromedio >= 3) {
                echo "Aprobado, su nota promedio es: " . number_format($notaPromedio,2) . "<br>";
            }

            elseif ($notaPromedio < 3) {
                echo "Desaprobado, si nota promedio es " . number_format($notaPromedio,2) . "<br>";
            }

            else {
                echo "Error en determinar si <br>";
            }

        }

    }

?>