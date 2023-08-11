<?php 


    require_once("1segundaParte.php");

    $c1 = new Carro("Mercedez", "Negro", "2014", 4, 4, "C");

    $c1->toSting();

    $c2 = new Carro("Tesla", "Blanco", "2023", 4, 4, "M");

    $c2->toSting();

    $c3 = new Carro("Mazda" , "Azul" , "2020", -1, 0, "C");

    $c3->toSting();

?>