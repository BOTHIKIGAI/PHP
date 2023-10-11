<!DOCTYPE html>
<html>
<head>
    <title>Calcular Mayor, Menor y Promedio</title>
</head>
<body>
    <h1>Calcular Mayor, Menor y Promedio</h1>
    <?php
    // Variables con los tres números
    $numero1 = 10;
    $numero2 = 5;
    $numero3 = 8;

    // Inicializar variables para el cálculo del mayor y menor
    $mayor = $numero1;
    $menor = $numero1;

    // Calcular el mayor y menor mediante un ciclo do...while
    $contador = 2; // Solo se compara con los dos primeros números
    do {
        $numero = ${"numero".$contador};

        // Actualizar el mayor y menor
        if ($numero > $mayor) {
            $mayor = $numero;
        } elseif ($numero < $menor) {
            $menor = $numero;
        }

        $contador++;
    } while ($contador <= 3);

    // Calcular el promedio de los dos primeros números
    $promedio = ($numero1 + $numero2) / 2;

    // Mostrar resultados
    echo "<p>El mayor número ingresado es: $mayor</p>";
    echo "<p>El menor número ingresado es: $menor</p>";
    echo "<p>El promedio de los dos primeros números es: $promedio</p>";
    ?>
</body>
</html>
