<?php
require_once "articulo.php";

class Tienda_Articulos {

    private $idTienda = 0;
    private $lista = null;

    //Constructor
    public function __construct(int $id){
        $this -> idTienda = $id;
        $this -> lista = array();
    }

    
    public function addArticulo (Articulo $arti){
        $this -> lista[] = $arti;
    }

    //Setters y getters
    public function getlista(){
        return $this -> lista;
    }
    public function setlista($list){
        $this -> lista = $list;
    }
    public function getidTienda(){
        return $this -> idTienda;
    }
    public function setidTienda($idTienda){
        $this -> idTienda = $idTienda;
    }

}

?>