<!DOCTYPE html>
<html>
<head>
    <title>Factura de Compra</title>
</head>
<body>
    <h1>Factura de Compra</h1>
    <?php
    // Datos de la compra (puedes modificarlos según lo necesites)
    $nombreArticulo = "Camiseta";
    $precioVenta = 80000;
    $cantidad = 3;

    // Calcular el IVA
    $iva = $precioVenta * 0.19;

    // Calcular el precio bruto (precio venta más IVA)
    $precioBruto = $precioVenta + $iva;

    // Aplicar descuento si el precio bruto es mayor a $100000
    if ($precioBruto > 100000) {
        $descuento = $precioBruto * 0.05;
        $precioBruto -= $descuento;
    } else {
        $descuento = 0;
    }

    // Calcular el total a pagar
    $totalPagar = $precioBruto * $cantidad;

    // Mostrar la factura
    echo "<p>Artículo: $nombreArticulo</p>";
    echo "<p>Precio de Venta: $precioVenta</p>";
    echo "<p>Cantidad: $cantidad</p>";
    echo "<p>IVA (19%): $iva</p>";
    echo "<p>Descuento: $descuento</p>";
    echo "<p>Precio Bruto: $precioBruto</p>";
    echo "<p>Total a Pagar: $totalPagar</p>";
    ?>
</body>
</html>
