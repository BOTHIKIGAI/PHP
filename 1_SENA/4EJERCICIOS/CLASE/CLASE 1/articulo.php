<?php

class Articulo{
    
    private int $codigo = 0;
    private String $nombre = "";
    private float $precio = 0.0;
    
    //Constructor
    public function __Construct(int $code, String $nom, float $precio){
        $this -> codigo = $code;
        $this -> nombre = $nom;
        $this -> precio = $precio;
    }

    //Metodo setters y getters
    public function getcodigo(){
        return $this -> codigo;
    }
    public function setcodigo(int $code){
        $this -> codigo = $code;
    }
    public function getnombre(){
        return $this -> nombre;
    }
    public function setnombre(int $nom){
        $this -> nombre = $nom;
    }
    public function getprecio(){
        return $this -> precio;
    }
    public function setprecio(int $precio){
        $this -> precio = $precio;
    }
    public function toString(){
        $resp = "Id: " . $this->codigo." Nombre del producto: ".$this->nombre." Precio: ".$this->precio;
        return $resp;
    }

}