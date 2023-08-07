<?php
require_once "tienda_Articulos.php";

$art1 = new articulo(200, "Teclado", 50000);
$art2 = new articulo(201, "Mouse", 40000);
$art3 = new articulo(202, "Monitor", 350000);
$art4 = new articulo(203, "CPU Torre", 500000);
$art5 = new articulo(204, "UPS", 200000);

$tienda = new Tienda_Articulos(123);

$tienda -> addArticulo($art1);
$tienda -> addArticulo($art2);
$tienda -> addArticulo($art3);
$tienda -> addArticulo($art4);
$tienda -> addArticulo($art5);

//Mostrar todos los articulos de la lista de la tienda

echo ("Codigo de la tienda: " .$tienda->getidTienda()."<br>");
foreach($tienda->getlista() as $articulo){
    echo ($articulo->toString()."<br>");
}

?>