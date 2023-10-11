<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Vector Numérico</title>
</head>
<body>
    <h1>Resultado del Vector Numérico</h1>

    <!-- 

        Problema

            Crear un formulario que pide los elementos de un vector numérico y al enviar muestre los 
            elementos leídos, la cantidad de elementos, la suma de los mismos, el elemento mayor y el 
            menor utilizando funciones. Además utilice la función ISSET() para determinar si son enviadas 
            las variables por el usuario

        ¿Que es un vector numerico?

            Es vector numerico es una estructura de datos en progrmación que se utiliza para almacenar 
            una secuencia ordenada de valores númericos. En terminos sencillos, un vector númerico es 
            una lista de números que están organizados en una orden especifico y se pueden acceder 
            mediante su posición o índice.

        ¿Que es ISSET?

        Requerimientos

            - Tener un vector numerico (de lo que sea)
            - Mostrar los leidos del vector numerico
            - Sumar el mayor de los numeros con el menor
            - Usar ISSET
    
        
    -->

    <h3>Mayor y Menor</h3>

    <?php

    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        // Obtener los valores ingresados por el usuario
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $num3 = $_POST['numero3'];

        // El vector numérico
        $vecNumerico = array($num1, $num2, $num3);
        print_r($vecNumerico);
        echo("<br><br>");

        // El número de mayor valor dentro del vector numérico
        $maxVecNumerico = max($vecNumerico);
        echo("El máximo número es: " . $maxVecNumerico);
        echo("<br><br>");

        // El número de menor valor dentro del vector numérico
        $minVecNumerico = min($vecNumerico);
        echo("El mínimo número es: " . $minVecNumerico);
        echo("<br><br>");

        // Suma del mayor y menor
        $sumaMayorMenor = $maxVecNumerico + $minVecNumerico;
        echo("La suma del mayor y el menor es: " . $sumaMayorMenor);
    } else {
        echo("Por favor, ingrese los tres números.");
    }
    
    ?>

    <h3>Ingrese los tres números:</h3>

    <form action="" method="post">
        1. <input type="number" name="numero1"><br><br>
        2. <input type="number" name="numero2"><br><br>
        3. <input type="number" name="numero3"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>

</body>
</html>
