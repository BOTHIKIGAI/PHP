<?php

    try {
        $usuario = "root";
        $pass = "";
        $mibd = new PDO('mysql:host=localhost;dbname=empresa', $usuario, $pass);
        echo ("Conexion exitosa<br>");

        $stmt = $mibd->query("SELECT * FROM EMPLEADO");
        $filas = $stmt->fetchAll();

        $stmt1 = $mibd->prepare("SELECT * FROM EMPLEADO");
        $stmt1->execute();

    foreach ($filas as $fila) {

        //Muestra una fila completa
        print_r($fila);
        echo "<br>";

        //indicando el indice de la columna
        printf("$fila[0] $fila[1] $fila[2] $fila[3] ");
        echo ("<br>");

        //indicando el nombre de la columna
        printf($fila['idempleado'] . " " . $fila['nombre'] . " " . $fila['apellido']);
        echo "<br>";

    }

    //Devulve las filas de la tabla como un arreglo indexado por nombre e indice
    $resultado = $stmt1->fetch(PDO::FETCH_BOTH);
    print_r($resultado);
    echo "<br>";

    //Devuelve las filas de la tabla como un arreglo indexado por nombre
    $resultado = $stmt1->fetch(PDO::FETCH_ASSOC);
    print_r($resultado);
    echo "<br>";

    //Devulve las filas de la tabla como un arreglo indexado por indice
    $resultado = $stmt1->fetch(PDO::FETCH_NUM);
    $datos1 = $resultado[1] . " " . $resultado[3];
    print $datos1;

    //Bucle para visualizar todas las filas de la tabla en un arreglo por indice
    while ($fila = $stmt1->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $datos1 = $fila[1] . "  " . $fila[3] . "<br>";
        print $datos1;
    }

    } catch (PDOException $e) {
        echo ("Error:" . $e->getMessage() . "<br>");
        die();
    }

?>