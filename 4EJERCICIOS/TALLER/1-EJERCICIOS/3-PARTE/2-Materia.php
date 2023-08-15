<?php

    require_once ("3-claseEstuidante.php");

    class materiaTercer extends EstudiantesTerceraParte{

        // Atributos

        public $nombreMateria; // Nombre de la materia del String
        public $listaAlumnos = array(); // Lista de los alumnos, almacena los objetos que se crearan de la clase estudiante

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
            // los objetos creados de la clase estudiante, osea los estudiantes se almacenaran aca dentro del atributo $listaAlumnos
        public function addEstudiante(EstudiantesTerceraParte $estudiante){
            $this -> listaAlumnos[] = $estudiante;
        }

            // toString
            // Imprimo los atributos de la clase Materia, pero no el array que contiene los objetos, eso lo realizo afuera en el documento "4-PruebasClase.php"
        public function toString() {
            
            echo "Materia: " . $this->nombreMateria . "<br>Alumnos:<br><br>";

        }

            // Porcentaje de aprobados
        

        
            public function porcentajeAprobados() {

                $numeroEstudiantes = count($this->listaAlumnos); // numero de elementos dentro del array listAlumnos
                $NumAprobados = 0; // inicializao las variables en cero, esta variable la usare mas
                $NumDesAprobados = 0; // inicializao las variables en cero, esta variable la usare mas
            
                for ($i = 0; $i < $numeroEstudiantes; $i++) { //Inicio un ciclo for el cual se repetira el numero de elementos que tenga el array
                    
                    $promedio = ($this->listaAlumnos[$i]->nota1 + $this->listaAlumnos[$i]->nota2 + $this->listaAlumnos[$i]->nota3) / 3;
                        // $promedio almacena el promedio de las notas de los obejtos Alumnos
                            // para llamar a las notas de cada objetos utilizo el $i del for, indicando que cambiara la nota solicitado de cada objeto
                            
            
                    if ($promedio < 3) { // incio condicionales para realizar comparativas...
                        $desAprobado = 1;
                        $aprobado = 0;  
                    } else {   
                        $desAprobado = 0;
                        $aprobado = 1;
                    }

                    // si el alumno aprobo sumara uno a $NumAprobados, de lo contrario no sumara
                    // si el alumno des aprueba no sumara a $NumAprobados, $pero si sumara a desAprobado

                    $NumAprobados += $aprobado;
                    $NumDesAprobados += $desAprobado;

                    // con el ciclo for puedo ir aumentando el valor de esta y tener el numero de aprobados y desaprobados.
                }
            
                // luego que el ciclo termina obtengo los porcentajes

                $PorAprobados = ($NumAprobados / $numeroEstudiantes) * 100;
                    // $PorAprovados = (numero de estudiante aprobados DIVIDO POR numero de estudiante aprobados)
                    //               = (obtengo un valor como 0.50) * 100  realizo esta multiplicación para que sea porcentaje
                    //               = 50 este valor seria el 50% 
                $PorDesAprobados = ($NumDesAprobados / $numeroEstudiantes) * 100;
            
                // Al finalizar realizo un echo con todos los datos

                echo "Materia: " . $this->nombreMateria . " Numero estudiantes: " . $numeroEstudiantes . "<br> Porcentaje Aprobado: " . number_format($PorAprobados,2) . " % <br>
                      Porcentaje Desaprobados: " . number_format($PorDesAprobados,2) . " % <br>";
            }
            

        

    }

?>