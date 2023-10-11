<?php

$dividendo = 40;
$divisor = 40;
try {
    if (gettype($dividendo !="integer")){
    throw new Exception("El tipo de dividendo debe ser numerico.");
    }
    if (gettype($divisor!= "integer")){
        throw new Exception("El tipo de divisor debe ser numerico.");
    }
    if ($divisor == 0){
        throw new Exception("El divisor no puede ser 0.");
    }
    $resultado = $dividendo / $divisor;
    echo "El resultado de la division es: $resultado";
}
catch (Exception $e) {
    echo "Se ha producido el siguiente error".$e->getMessage();
}

?>