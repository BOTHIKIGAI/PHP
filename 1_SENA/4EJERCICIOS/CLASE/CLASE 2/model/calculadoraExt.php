<?php

class calculadoraExt extends Calculadora{

    public function __Contruct(string $mark, string $model){
        parent::__construct($mark, $model);
    }

    public function __destruct() {
        parent::__destruct();
    }
    
    public function potencia($n1, $n2){
        
        $pot = 1;
        for ($i = 1; $i <= $n2; $i++){
            $pot *= $n1;
        } 
        return $pot;

    }

    


}
?>