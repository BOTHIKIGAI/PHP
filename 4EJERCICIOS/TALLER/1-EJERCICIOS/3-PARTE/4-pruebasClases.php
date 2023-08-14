<?php

    require_once("1-claseAlumnos.php");
    require_once("2-Materia.php");
    require_once("3-claseEstuidante.php");

    $profesor1 = new profesoresParteTres(2001, "Edgar Delgado", "Calidad de Software");

    $estudiante1 = new EstudiantesTerceraParte(10001, "Juan Esteban Cajiao Madero", 20, "Presencial");
    $estudiante2 = new EstudiantesTerceraParte(10002, "Milanesa Benavides", 17, "Distancia");
    $estudiante3 = new EstudiantesTerceraParte(10003, "Baki Hanma", 19, "Presencial");

    $profesor1 -> addEstudiante($estudiante1);
    $profesor1 -> addEstudiante($estudiante2);
    $profesor1 -> addEstudiante($estudiante3);

    $profesor1 -> toString();

    foreach($profesor1->getListaAlumnos() as $estudiante) {
        echo ($estudiante->toString(). "<br>");
    }
?>