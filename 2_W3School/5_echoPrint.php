<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quinta Parte - Echo y Print</title>
</head>
<body>

    <?php 

        // Sentencia Echo
    
        echo "<h2> PHP is Fun! </h2>"; // Imprimir en pantalla una etiqueta HTML
        echo "Hello world <br>"; // Imprimir sin etiqueta (el <br> es para el salto de linea en el siguiente echo)
        echo "I'm about to learn PHP! <br>";
        echo "This " , "string ", "was ", "made ", "with multiple parameters."; // Los parametros se definen con la coma

        // Imprimir valor de variables

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        echo "<h2>" . $txt1 . "</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x + $y;
        echo "<br>";

        // Sentencia String

        /*
        
            No existe un cambio sustancial en la función de print y echo, pero print retorna el valor 
            de 1 y tampoco se puede enviar varios poaramtos con comas.
        
        */


        print "<h2> PHP is Fun! </h2>"; // Imprimir en pantalla una etiqueta HTML
        print "Hello world <br>"; // Imprimir sin etiqueta (el <br> es para el salto de linea en el siguiente print)
        print "I'm about to learn PHP! <br>";

        print "<h2>" . $txt1 . "</h2>";
        print "Study PHP at " . $txt2 . "<br>";
        print $x + $y;
        print "<br>";

    
    ?>


</body>
</html>
