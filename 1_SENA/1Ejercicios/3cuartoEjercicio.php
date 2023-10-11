<!DOCTYPE html>
<html>
<head>
    <title>Descuento y Sueldo Neto</title>
</head>
<body>
    <h1>Descuento y Sueldo Neto</h1>
    <?php
    // Variable con el sueldo del trabajador (puedes modificarla según lo necesites)
    $sueldo = 1500000;

    // Calcular el descuento y el sueldo neto
    if ($sueldo <= 1000000) {
        $descuento = $sueldo * 0.10;
    } elseif ($sueldo > 1000000 && $sueldo <= 2000000) {
        $descuento = ($sueldo - 1000000) * 0.05;
    } else {
        $descuento = ($sueldo - 2000000) * 0.03 + (1000000 * 0.05);
    }

    $sueldoNeto = $sueldo - $descuento;

    // Mostrar el descuento y sueldo neto
    echo "<p>Descuento: $descuento</p>";
    echo "<p>Sueldo Neto: $sueldoNeto</p>";
    ?>
</body>
</html>
