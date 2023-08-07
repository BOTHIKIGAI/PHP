<?php

class Calculadora {
    private string $marca;
    private string $modelo;

    //Constructor
    public function __construct(string $mark, string $model){
        $this -> marca = $mark;
        $this -> modelo = $model;
    }

    // Destructor

    public function __destruct() {
        echo "Destruyendo variables en calculador";
    }

    //Operaciones
    public function sumar (int $n1, int $n2){
        $rpta = $n1 + $n2;
        return $rpta;
    }
    public function restar (int $n1, int $n2){
        $rpta = $n1 - $n2;
        return $rpta;
    }
    public function multiplicar (int $n1, int $n2){
        $rpta = $n1 * $n2;
        return $rpta;
    }
    public function dividir (int $n1, int $n2){
        $rpta = $n1 / $n2;
        return $rpta;
    }

    //Getters y Setters
    public function getMarca(){
        return $this -> marca;
    }

    public function setMarca(string $mark){
        $this -> marca = $mark;
    }
    public function getModelo(){
        return $this -> modelo;
    }

    public function setModelo(string $model){
        $this -> modelo = $model;
    }



}

?>