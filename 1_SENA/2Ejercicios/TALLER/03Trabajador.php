<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanes</title>
</head>
<body>
    
    <!-- Problema -->

    <h1>Trabajador y paga</h1>

    <form action="" method="post">
        Nombre trabajador: <input type="text" name="nombreTrabajador"><br><br>
        Número de días trabajados: <input type="number" name="diasTrabajados"><br><br>
        Horas por día: <input type="number" name="horasPorDia"><br><br>
        Costo por hora: <input type="number" name="costePorHora"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST['nombreTrabajador']) && isset($_POST['diasTrabajados']) && isset($_POST['horasPorDia']) && isset($_POST['costePorHora'])) {
        $nombreTrabajador = $_POST['nombreTrabajador'];
        $diasTrabajados = $_POST['diasTrabajados'];
        $horasPorDia = $_POST['horasPorDia'];
        $costeDia = $_POST['costePorHora'];

        echo "<h2>Resultado:</h2>";
        echo "El trabajador $nombreTrabajador";
        echo " trabajó $diasTrabajados días, cada día $horasPorDia horas, con un costo por hora de $costeDia.";
        $salario = $diasTrabajados * $horasPorDia * $costeDia;
        echo " Su salario es de $" . $salario;
    } elseif (isset($_POST['nombreTrabajador']) || isset($_POST['diasTrabajados']) || isset($_POST['horasPorDia']) || isset($_POST['costePorHora'])) {
        echo "Por favor, complete todos los campos con valores numéricos.";
    }
    ?>

</body>
</html>
