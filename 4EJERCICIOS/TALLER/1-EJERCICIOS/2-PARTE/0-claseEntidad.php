<?php

    class Entidad {

        // Atributos

        private $nombre;
        private $listaGeneral = array();
        private $listaEstudiante = array();
        private $listaEmpleado = array();
        private $listaEstudiante_Empleado = array();

        // Constructor
        
        public function __construct(string $nombre) {

            $this -> nombre = $nombre;

        }

        // Get y Set

        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }

        public function getNombre(){
            return $this -> nombre;
        }

        public function setListaGeneral($personas) {
            $this->listaGeneral = $personas;
        }
    
        public function setListaEstudiante($personas) {
            $this->listaEstudiante = $personas;
        }
    
        public function setListaEmpleado($personas) {
            $this->listaEmpleado = $personas;
        }
    
        public function setListaEstudianteEmpleado($personas) {
            $this->listaEstudiante_Empleado = $personas;
        }
    
        // Getters para las listas
        public function getListaGeneral() {
            return $this->listaGeneral;
        }
    
        public function getListaEstudiante() {
            return $this->listaEstudiante;
        }
    
        public function getListaEmpleado() {
            return $this->listaEmpleado;
        }
    
        public function getListaEstudianteEmpleado() {
            return $this->listaEstudiante_Empleado;
        }



        // Metodos 

        // 1. Añadir Persona General

        public function addPersonaGeneral(PersonaBase $persona) {

            $this -> listaGeneral[] = $persona;

        }

        // 2. Añadir Persona Estudiante

        public function addPersonaEstudiante(PersonaBase $persona) {

            $this -> listaEstudiante[] = $persona;

        }

        // 3. Añadir Persona Empleado 

        public function addPersonaEmpleado(PersonaBase $persona) {

            $this -> listaEmpleado[] = $persona;

        }

        // 4. Añadir Persona Estudiante Empleado

        public function addPersonaEstudiate_Empleado(PersonaBase $persona) {

            $this -> listaEstudiante_Empleado[] = $persona;

        }

        

    }

?>