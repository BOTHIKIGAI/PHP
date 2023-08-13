<?php

    class Cliente{

        // Atributos

        private $ndi;
        private $nombres;
        private $telf;
        private $correo;

        // Constructor

        public function __construct(int $ndi, string $nombres, string $telf , string $correo) {

            $this -> ndi = $ndi;
            $this -> nombres = $nombres;
            $this -> telf = $telf;
            $this -> correo = $correo;

        }

        // get y set
        
        public function getNdi() {
            return $this->ndi;
        }
    
        public function setNdi($ndi) {
            $this->ndi = $ndi;
        }
    
        public function getNombres() {
            return $this->nombres;
        }
    
        public function setNombres($nombres) {
            $this->nombres = $nombres;
        }
    
        public function getTelf() {
            return $this->telf;
        }
    
        public function setTelf($telf) {
            $this->telf = $telf;
        }
    
        public function getCorreo() {
            return $this->correo;
        }
    
        public function setCorreo($correo) {
            $this->correo = $correo;
        }

        public function toString() {
            
        echo "Id:" . $this->getNdi() . "Nombre" .  $this-> getNombres() . "Telefono: " . $this->getTelf() . "Correo: " . $this->getCorreo();

        }
        


    }


?>