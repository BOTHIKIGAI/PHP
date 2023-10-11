<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanes</title>
</head>
<body>
    
    <!-- 

        Problema
        
            Crear un formulario que lea una cantidad en pesos y al enviarlo convierta la cantidad en euros  y en dólares. 
            Utilice funciones

        ¿Que es una conversión de monedas?

            La conversión de monedas, tambien conocida como intercambio de divisas o cambio de moneda, se refiere al proceso de
            convertir el valor de una moneda a otra segun una tasa de cambio determinada. Esto se hace para facilitar el comercio
            y las transacciones internacionales.

        Requerimientos

            - formulario ingresar divisa en pesos cop
            - procesasr pesos y transferirlos a euros y dolares
            - imprimir en pantalla el intercambio de divisas
            - utilizar funciones

    -->

    <?php

        function conversionCOP_USD($cop) {
            $convCop_USD = $cop * 0.000255;
                // al momento de realizar la investigación un peso colombiano equivale a 0.000255 dolares
            return $convCop_USD;
        }

        function conversionCOP_EU($cop) {
            $convCop_EU = $cop * 0.00023;
                // al momento de realizar la investigación un peso colombiano equivale a 0.00023 dolares
            return $convCop_EU;
        }

        if(isset($_POST["PesoCop"])) {

            $PesoCop = $_POST['pesoCop'];

            conversionCOP_USD($PesoCop);
            conversionCOP_EU($PesoCop);

            echo ($PesoCop . " a " . $convCop_USD);
            echo ($PesoCop . " a " . $convCop_EU);

        } else {

            echo("Por favor ingrese la cantidad dinero a la cual desea realizar la conversión");

        }

    ?>

    <h1>Intercambio de divisas</h1>
    <p>Realizar conversión de pesos cop a euros y dolares</p><br>

    <form action="" method="post">

        
        COP: <input type="number" name="pesoCop"><br><br>
        <input type="submit" value="Enviar"><br><br>

    </form>

</body>
</html>