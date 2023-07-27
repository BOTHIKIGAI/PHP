<?php

    $arreglo1 = ["Bogotá", "Cali", "Medellin", "Bucaramango", "Cartagena"];
    $n = count($arreglo1);
    echo "<table aling='center' width='50%'>";
    for ($i = 0; $i < $n; $i++) {
        echo "<tr><td>";echo $arreglo1[$i]."</td><tr>";

    }

    echo "<table>";


?>