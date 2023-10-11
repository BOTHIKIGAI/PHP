<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primra Parte PHP</title>
</head>
<body>

    <!--Creamos una estructura HTML y dentro de la misma integramos la PHP--!>
    <!--Para ejecutar el script de PHP deberemos abrir sus etiquetas--!>
        <!-- <?php ?> --!>


    <?php

        // Para comentear usamos doble slash
        // echo nos permite imprimir inforación por pantalla

        echo "Hello World!";

        // Las sentencia de PHP siempre terminan con punto y coma ( ; )

        echo "<hr>";  // se puede insertar estructura HTML desde los echo

        // Distición entre mayúsculas y minúsculas de PHP

        ECHO "Holla World! <br>"; 
        echo "Holla World! <br>"; 
        EcHo "Hello World! <br>";

        // Es importante aclarar que aplica en todo ->

            // Un ejemplo de disticion de minusculas y mayusculas con variables

            $color = "red"; // definir una variable por medio de $<insertarNombre>

            echo "My car is " . $color . "<br>";
            echo "My car is " . $COLOR . "<br>"; // En pantalla imprimira error por no existir la variable ya que esto es unico
            echo "My car is " . $coLOR . "<br>"; // Tambien saldra error

    ?>
    
</body>
</html>