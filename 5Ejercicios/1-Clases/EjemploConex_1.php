<?php

    try {
        $usuario = "root";
        $pass = "";
        $mibd = new PDO('mysql:host=localhost;dbname=empresa', $usuario, $pass);
        echo ("Conexion exitosa");

        foreach ($mibd->query("SELECT * FROM DEPARTAMENTO") as $fila) {
            print_r($fila);
            echo "<br>";
        }
        $mibd = null;

    } catch (PDOException $e) {
        echo ("Error" . $e->getMessage() . "<br>");
        die();
    }

?>