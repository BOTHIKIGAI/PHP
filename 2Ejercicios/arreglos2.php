<?php

    $arreglo = array(7,9,12,16,8,5);

    // Funcionaes predefinidas

    $n = count($arreglo);
    $m = max($arreglo);
    $i = min($arreglo);

    // Funciones de usuario

    function calcularPromedio ($arreglo){
        $suma = 0; $prom = 0;
        
        for($i=0;$i<count($arreglo);$i++){
            
            $suma += $arreglo[$i];

        }

        $prom = $suma/count($arreglo);

        return $prom;
    }

    echo "El promedio es: " .calcularPromedio($arreglo);


?>