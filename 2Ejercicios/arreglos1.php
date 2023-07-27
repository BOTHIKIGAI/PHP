<?php

    $lista = array(

        array("Peru", "Lima"),
        array("Bolivia", "La Paz"),
        array("Brasil", "Brasilia"),
        array("Argentina", "Buenos Aires"),
        array("Colombia", "Bogotá"),
        array("Venezuela", "Caracas"),

    );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body>
    
    <h3>Conoce America Latina</h3>
    <table width="300" border="1">

        <tr>

            <th width="128">Pais</th>
            <th width="128">Capital</th>

        </tr>
        
        <?php

            for($f = 0; $f < count($lista); $f++ ) {

        ?>

        <tr>

            <td> <?php echo($lista[$f][0]) ?> </td>
            <td> <?php echo($lista[$f][1]) ?> </td>

        </tr>

        <?php   }	?>    

    </table>

</body>
</html>