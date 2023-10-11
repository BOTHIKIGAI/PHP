<?php 

    require_once("animal.php");

    $dog = new Perro("Pitbull", "blanco", "Mediano");
    echo "Informacion de \$dog ". $dog->toString();

    $copiaDog = clone $dog;
    echo "Informacion de \$copoiaDog ". $copiaDog->toString(); // 
    
    // $dog -> comer();
    // $dog -> emiteSonido();
    // $dog -> correr();


    $cat = new Gato();
    $cat -> comer();
    $cat -> emiteSonido();
    $cat -> correr();


?>