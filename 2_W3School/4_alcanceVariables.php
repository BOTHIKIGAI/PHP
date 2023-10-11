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
        echo $b . "<br>"; // la salida sera 15

        /*
        
        Cuarta Prueba - Almacenar en matriz
        
        Se puede acceder a esta matriz desde dentro de las funciones y se puede utilizar 
        para actualizar variables globales directamente.

        $GLOBALS es un arreglo asociativo superglobal que almacena todas las variables
        gloales disponibles en un script PHP. Puedes acceder a las variables globales
        utilizando la notació de array y el nombre de la variale como clave de arreglo.

        */

        $w = 5;
        $v = 10;

        function myFourthTest(){

            $GLOBALS['v'] = $GLOBALS['w'] + $GLOBALS['v'];

        }

        myFourthTest();

        echo "$v <br>"; // 

        /*
        
        Quinta Pruea - Static

        La palabra reservada static se utiliza en el contexto de una función para
        crear una variables estatica. Una variable estática es una variable que retiene
        su valor entre llamadas sucesivas a la función. 

        Esto significa que, a diferencia de las variables locales regulares que se
        reinician cada vez que se llama a la función, una variable estatica conserva su
        valor incluso despues de que la función haya terminado.

        */

        // Ejemplo

        function myFifthTest() {

            static $t = 0; // Inicializo la variable $t en 0 y siendo static
            echo $t; // Imprimo la variable $x
            $t++; // Aumento el valor de la variable $t mas 1

        }

        // Para demostrar el funcionamiento de static ejecutare la funcion myFifthTest tres veces
        myFifthTest(); // imprime 0
        myFifthTest(); // imprime 1
        myFifthTest(); // imprime 2

        // Por cada vez que se ejecuta su valor permanecio y aumento +1

    ?>

</body>
</html>