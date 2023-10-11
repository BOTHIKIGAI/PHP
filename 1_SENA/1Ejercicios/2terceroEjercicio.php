<!DOCTYPE html>
<html>
<head>
    <title>Calificaciones y Promedio</title>
</head>
<body>
    <h1>Calificaciones y Promedio</h1>
    <?php
    // Variables con las calificaciones (puedes modificarlas según lo necesites)
    $calificacion1 = 9;
    $calificacion2 = 7;
    $calificacion3 = 8;
    $calificacion4 = 6;
    $calificacion5 = 4;

    // Calcular el promedio
    $promedio = ($calificacion1 + $calificacion2 + $calificacion3 + $calificacion4 + $calificacion5) / 5;

    // Mostrar el promedio
    echo "<p>El promedio final es: $promedio</p>";

    // Imprimir el mensaje según el rango del promedio
    if ($promedio >= 6 && $promedio <= 10) {
        echo "<p>Aprobado</p>";
    } elseif ($promedio >= 5 && $promedio < 6) {
        echo "<p>Derecho a extraordinario</p>";
    } elseif ($promedio >= 2 && $promedio < 5) {
        echo "<p>Derecho a título</p>";
    } elseif ($promedio >= 0 && $promedio < 2) {
        echo "<p>Sin derecho a acreditar</p>";
    } else {
        echo "<p>Error: El promedio está fuera del rango válido.</p>";
    }
    ?>
</body>
</html>
