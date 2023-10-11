<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuarta parte - Alcance de las variables</title>
</head>
<body>
    
    <?php 
    
        // Variable de tipo global
        // Las variables globales son aquellas a las cuales podemos acceder
        // desde cualquier parte del documento.

        $x = 5; // alcance global

        function myTest() { // una función
             // La funcion no puede usar la variable x, dara error porque unicamente toma las variables de adentro
            echo "<p>La función x dentro de la función puede usar la variable x de valor $x</p>";
        }

        myTest(); // Se debe llamar la función

        echo "<p>Se puede usar la variable x desde afuera de la función, x tiene un valor de $x</p>";

        /*
        
            Variable de tipo local
            Las variables de tipo local solo se pueden acceder dentro de
            la función en la cual se declaró e inicializó.
        
        */

        function mySecondTest() {
            $y = 5;
            echo "La variable y es una variable local dentro de la función mySecondTest y su valor es de $y";
        }

        mySecondTest(); // Llama a la función mySecondTest para que se ejecute.

        echo "<p>No se puede usar la variable y cuando se define dentro, y tiene un valor de $y</p>";
        // Observaremos un error ya que la variable $y es local y unicamente se accede desde la función

        $a = 5;
        $b = 10;

        function myThirdTest() {

            global $a, $b; // la palabra reservada global permite volver una variable local a un gloabl
            $b = $a + $b; // $b se convierte en una variable global con su correspondiente resultado


        }

        myThirdTest();
        echo $b; // la salida sera 15

        /*
        
        Cuarta Prueba - Almacenar en matriz
        
        */

    ?>

</body>
</html>