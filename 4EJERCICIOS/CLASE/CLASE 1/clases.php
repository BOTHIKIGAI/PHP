<?php
class persona{
    //Propiedades o atributos
    private $nroId = 0;
    private $nombre = "";
    private $apellido = "";
    private $edad = 0;
    private $nacionalidad = "";

    //Metodos
    public function caminar(){
        return "Caminando";
    }
    public function saltar(){
        return "Saltando";
    }
    public function hablar(){
        return "Hablando";
    }

    //Metodo getters y setters
    public function getnroId(){
        return $this -> nroId;
    }
    public function setnroId(int $num){
        $this -> nroId = $num;
    }
    public function getnombre(){
        return $this -> nombre;
    }
    public function setnombre(String $nom){
        $this -> nombre = $nom;
    }
    public function getapellido(){
        return $this -> apellido;
    }
    public function setapellido(String $apel){
        $this -> apellido = $apel;
    }
    public function getedad(){
        return $this -> edad;
    }
    public function setedad(Int $ed){
        $this -> edad = $ed;
    }
    public function getnacionalidad(){
        return $this -> nacionalidad;
    }
    public function setnacionalidad(String $nac){
        $this -> nacionalidad = $nac;
    }
    
    //Constructor
    public function __construct(Int $n, String $nom, String $apel, Int $ed, String $nac){
        $this -> nroId = $n;
        $this -> nombre = $nom;
        $this -> apellido = $apel;
        $this -> edad = $ed;
        $this -> nacionalidad = $nac; 
    }
}
?>