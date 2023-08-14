<?php

require_once "tienda_Articulos.php";
require_once "cliente.php";
require_once "tienda.php";

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

echo ("Codigo de la tienda: " . $tienda->getidTienda(). "<br>");

foreach($tienda->getlista() as $articulo) {

    echo ($articulo->toString()."<br>");
    
}

$miTienda = new Tienda (123123,"Tienda de la Cumbre", "cr 415 - 54 c 43");

$c1 = new Cliente(34343,"Pepito de la Cumbre", "3451240" ,"pepCumbre@gmail.com");
$c2 = new Cliente(23423,"Milanesa Mila", "4561280" ,"milanMilan@gmail.com");
$c3 = new Cliente(12312,"Niyi Morera", "4603140" ,"niy@gmail.com");
$c4 = new Cliente(76967,"Juanes Cajiao", "435091" ,"juanes@gmail.com");
$c4 = new Cliente(43645,"Tara Benavides", "238091" ,"tara@gmail.com");

$miTienda ->agregarCliente($c1);
$miTienda ->agregarCliente($c2);
$miTienda ->agregarCliente($c3);
$miTienda ->agregarCliente($c4);


echo ("<b> Tenda: " . $miTienda->getNombre()."</b>".$miTienda->getDireccion(). "<br>");

foreach ($miTienda->getCliente() as $cliente) {
    echo ($cliente->toString()."<br>");
}

?>