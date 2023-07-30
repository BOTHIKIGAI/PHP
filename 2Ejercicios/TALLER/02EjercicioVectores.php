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

    <h3>Agrege un numero</h3>

    <?php

            // el vector numerico
        $vecNumerico = array(5,1,9);
        print_r($vecNumerico);
        echo("<br>" . "<br>" );

            // el numero de mayor valor dentro del vector numerico
        $maxVecNumerico = max($vecNumerico); // max es una función de PHP para obtener el dato de mayor valor de un array o vector
        echo("El maximo numero es: ". $maxVecNumerico);
        echo("<br>" . "<br>" );

            // el numero de menor valor dentro del vector numerico
        $minVecNumerico = min($vecNumerico); // min es una función de PHP para obtener el dato de menor valor de un array o vector
        echo ("El minimo numero es: ". $minVecNumerico);
        echo("<br>" . "<br>" );

            // el numero 
    ?>

</body>
</html>
