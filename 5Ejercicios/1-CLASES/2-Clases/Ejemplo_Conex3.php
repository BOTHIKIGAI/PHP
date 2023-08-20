<?php
try {
    $user = "root";
    $pass = "";
    $dbh = new PDO('mysql:host=localhost;dbname=empresa', $user, $pass);

    $sth = $dbh->prepare('SELECT * FROM empleado where idempleado = ?');
    $sth->execute(array("E0001"));
    if ($sth->rowCount() == 0) {
        throw new PDOException('No existe el empleado con ese codigo');
    } else {
        $fila = $sth->fetch();
        foreach ($fila as $columna => $valor) {
            echo ("Elemento[$columna]=" . $valor . "<br>");
        }

    }

    $idDept = 101;
    $sth = $dbh->prepare('SELECT * FROM departamento where idDepartamento = ?');
    $sth->bindParam(1, $idDept, PDO::PARAM_INT);
    $sth->execute();
    if ($sth->rowCount() == 0) {
        throw new PDOException('No existe el empleado con ese codigo');
    } else {
        $filas = $sth->fetchAll();
        foreach ($filas as $fila) {
            echo ("{$fila['iddepartamento']}  {$fila['nombre']}<br>");
        }

    }

} catch (PDOException $e) {
    echo ("Error:" . $e->getMessage());
}
