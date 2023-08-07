<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanes - Clase Persona</title>
</head>
<body>
    
    <h1>Taller 3 POO - Primer punto</h1>
    <hr>

    <center>

        <h2>Clase Persona</h2>
        <br>

        <form action="" method="post">

            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" placeholder="ingrese nombre...">
            <br><br>
            <label for="edad">Edad: </label>
            <input type="text" id="edad" name="edad" placeholder="ingrese edad...">
            <br><br>
            <label for="sexo">Sexo: </label>
            <select name="sexo" id="sexo" name="sexo">
                <option value="H">Masculino</option>
                <option value="M">Femenino</option>
            </select>
            <br><br>
            <label for="peso">Peso: </label>
            <input type="number" id="peso" name="peso" value = 0 placeholder="ingrese peso...">
            <br><br>
            <label for="altura">Altura: </label>
            <input type="number" step= "any" id="altura" name="altura" value = 0 placeholder="ingrese altura...">
            <br><br>
            <button type="submit" name="enviar" value="enviar">Guardar</button>
            <br><br>

        </form>

        <?php

        require_once ("1-CLASEpersona.php");

        if (isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["sexo"]) && isset($_POST["peso"]) && isset($_POST["altura"])) {
            
            $personaNombre = $_POST["nombre"];
            $personaEdad = $_POST["edad"];
            $personaSexo = $_POST["sexo"];
            $personaPeso = $_POST["peso"];
            $personaAltura = $_POST["altura"];

            $primerPersona = new Persona($personaNombre, $personaEdad, $personaSexo, $personaPeso, $personaAltura);
            echo "<p>Primer persona:</p>";
            echo $primerPersona->toString();
            
            $imc = $primerPersona -> calcularIMC($personaPeso, $personaAltura);

            if ($imc == 1) {
                echo "<p>Primer persona esta por debajo de su peso ideal</p>";
            }

            else if ($imc == 0 ) {
                echo "<p>Primer persona esta en su peso ideal</p>";
            }

            else if ($imc == -1) {
                echo "<p>Primer persona esta por encima de su peso</p>";
            } 

            else if ($imc == 2)  {
                echo "<p>Error en determinar el IMC</p>";
            }

            else {
                echo "<p>Error en determinar el IMC</p>";
            }

            $mayorEdad = $primerPersona -> esMayorDeEdad($personaEdad);

            echo "Primera persona " . $mayorEdad;


        }

        ?>

    </center>

</body>
</html>
