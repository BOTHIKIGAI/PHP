<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tercera Parte - Variables</title>
</head>
<body>
    
    <!-- Declarar variales en PHP -->

    <?php 
    
        // Toda variable se declara con el signo $ al inicio

        $txt = "Hello World!"; // $txt almacenara un strig Hello Wordl
        $x = 5; // $x almacenara un int de valor 5
        $y = 10.5; // $y almcenara un float de valor 10.5
        
        // Variables de salida

        $txt = "W3Schools.com"; 
            // La variable $txt pasa de Hello World! a W3Schools.com
        echo "I love $txt! <br>"; 
            // Dentro de comillas se puede definir la variable $txt, imprimiendo el mensaje I love W3Schools.com
        echo "I love " . $txt . "! <br>";
            // El punto concatena los elementos que deseemos

        // Suma dos variables

        $x = 5; // $x almacena el int de valor 5
        $y = 4; // $y almacena el int de valor 4

        echo $x + $y;
        // Imprime el resultado de la suma
            // 5 + 4 = 9 
            // Por pantalla aparecera 9
        

    ?>

</body>
</html>