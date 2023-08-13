<?php

    class Tienda {

        private $codigo;
        private $nombre;
        private $direccion;
        private $cliente = array();
        
        public function __construct(int $cod, string $nom, string $dir) {

            $this -> codigo = $cod;
            $this -> nombre = $nom;
            $this -> direccion = $dir;

        }

        public function agregarCliente (Cliente $cliente) {

            $this -> cliente[] = $cliente;

        }

        public function getCodigo() {
            return $this->codigo;
        }
    
        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }
    
        public function getNombre() {
            return $this->nombre;
        }
    
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
    
        public function getDireccion() {
            return $this->direccion;
        }
    
        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }
    
        public function getCliente() {
            return $this->cliente;
        }
    
        public function setCliente($cliente) {
            $this->cliente = $cliente;
        }


    }

?>