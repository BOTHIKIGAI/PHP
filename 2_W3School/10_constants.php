<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decima Parte - Constants</title>
</head>
<body>
    
    <?php 
    
        // Create a PHP Constant

        // define (name, value. case-insensitive)

        define("GREETING", "Welcome to W3Schools.com!");
        define("GREETINGII", "Welcome to W3Schools.com!", true);
        
        echo GREETING . "<br>";
        echo GREETINGII . "<br>";

        // Anothr way to define a constants

        const GRETTINGIII = "Welcome to W3Schools.com!";
        // The variable's name always in ippercase
        echo GRETTINGIII . "<br>"; // 


        // PHP constant arrays

        const CONSTANTE = ['ROJO', 'VERDE', 'AZUL'];
        echo CONSTANTE[0] . "<br>";
        echo CONSTANTE[1] . "<br>";
        echo CONSTANTE[2] . "<br>";

        // constants are globals

        function myTest() {
            echo GREETING . "<br>"; // Take the constants GREETING
        }

        myTest();


    ?>


</body>
</html>