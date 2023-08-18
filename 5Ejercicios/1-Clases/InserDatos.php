<?php

    try {
        $usuario = "root";
        $pass = "";
        $mibd = new PDO('mysql:host=localhost;dbname=empresa', $usuario, $pass);
        echo ("Conexion exitosa<br>");

        $nombre = 'Tecnologia e Innovacion';
        $valor = 110;
        $stmt = $mibd->prepare("INSERT INTO DEPARTAMENTO (iddepartamento, nombre) VALUES (?,?)");
        $stmt->bindParam(1, $valor);
        $stmt->bindParam(2, $nombre);
        $stmt->execute();

        $mibd = null;

    } catch (PDOException $e) {
        echo ("Error" . $e->getMessage() . "<br>");
        die();
    }

?>
