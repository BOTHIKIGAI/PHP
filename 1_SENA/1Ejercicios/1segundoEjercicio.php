<!DOCTYPE html>
<html>
<head>
    <title>Nombre de Nota Musical</title>
</head>
<body>
    <h1>Nombre de Nota Musical</h1>
    <?php
    // Variable con la letra correspondiente a la nota (puedes modificarla según lo necesites)
    $letraNota = 'C';

    // Convertir la letra a mayúscula para asegurar la coincidencia con las letras de notas
    $letraNota = strtoupper($letraNota);

    // Variable para almacenar el nombre de la nota
    $nombreNota = null;

    // Ciclo para verificar si la letra corresponde a una nota musical
    if ($letraNota === 'C') {
        $nombreNota = 'Do';
    } elseif ($letraNota === 'D') {
        $nombreNota = 'Re';
    } elseif ($letraNota === 'E') {
        $nombreNota = 'Mi';
    } elseif ($letraNota === 'F') {
        $nombreNota = 'Fa';
    } elseif ($letraNota === 'G') {
        $nombreNota = 'Sol';
    } elseif ($letraNota === 'A') {
        $nombreNota = 'La';
    } elseif ($letraNota === 'B') {
        $nombreNota = 'Si';
    }

    // Mostrar el resultado
    if ($nombreNota) {
        echo "<p>La nota musical correspondiente a la letra '$letraNota' es: $nombreNota</p>";
    } else {
        echo "<p>Error: La letra '$letraNota' no corresponde a una nota musical.</p>";
    }
    ?>
</body>
</html>
