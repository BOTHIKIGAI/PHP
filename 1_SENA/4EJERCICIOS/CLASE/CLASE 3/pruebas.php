<?php 

    require_once("Carro.php");

    $audi1 = new Audi("Audi");
    $audi1 -> presentarCarro();
    $tesla1 = new Tesla("Tesla");
    $tesla1 -> presentarCarro();
    $renault = new Renault("Renult");
    $renault -> presentarCarro();
    $honda = new Honda("Honda");
    $honda -> presentarCarro();
    

    



?>