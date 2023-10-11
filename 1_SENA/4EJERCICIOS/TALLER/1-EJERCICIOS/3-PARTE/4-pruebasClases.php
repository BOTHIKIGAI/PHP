<?php

    require_once("1-claseProfesor.php");
    require_once("2-Materia.php");
    require_once("3-claseEstuidante.php");

    $profesor1 = new profesoresParteTres(2001, "Edgar Delgado", "Calidad de Software");

    $estudiante1 = new EstudiantesTerceraParte(10001, "Juan Esteban Cajiao Madero", 20, "Presencial",5,4,3);
    $estudiante2 = new EstudiantesTerceraParte(10002, "Milanesa Benavides", 17, "Distancia", 5,5,5);
    $estudiante3 = new EstudiantesTerceraParte(10003, "Baki Hanma", 19, "Presencial",3,1,1);

    $profesor1 -> addEstudiante($estudiante1); // añado los objetos estudiante a la clase Materia
    $profesor1 -> addEstudiante($estudiante2);
    $profesor1 -> addEstudiante($estudiante3);

    $profesor1 -> toString(); // realizo un toString del Maestro, este contiene los datos del Maestro, seguido de la información de la materia
    
        // para continuar con el anterior toString realizo un foreach para imprimir los dato de cada Alumno

    foreach($profesor1->getListaAlumnos() as $estudiante) {
        echo ($estudiante->toString(). "<br>");
    }

    $profesor1 -> porcentajeAprobados();

?>