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

        require_once ("1-CLASEpersona.php"); // vinculo con la clase persona

        // ISSET para confirmar la entrada de los datos

        if (isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["sexo"]) && isset($_POST["peso"]) && isset($_POST["altura"])) {
            
            // asignar los resultados de la variable 

            $personaNombre = $_POST["nombre"];
            $personaEdad = $_POST["edad"];
            $personaSexo = $_POST["sexo"];
            $personaPeso = $_POST["peso"];
            $personaAltura = $_POST["altura"];

            // Primera Persona - Creación 

            $primerPersona = new Persona($personaNombre, $personaEdad, $personaSexo, $personaPeso, $personaAltura);

            // Crear el primer objeto $primerPersona, este recibira la información del formulario y la asignara en los atributos de la clase
        
            echo "<p>Primer persona:</p>";
            echo $primerPersona->toString(); // metodo para imprimir las caracteristicas del objeto
            
            $imc1 = $primerPersona -> calcularIMC($primerPersona->getPeso(), $primerPersona->getAltura()); // calcular IMC asignando las variables de la clase

            // El metodo "calcularIMC" retorna un valor entre -1 y 2

            // Inicio el condicional para devolver mediante un echo un mensaje en el cual se determine si su peso es el optimo

            if ($imc1 == 1) {
                echo "<p>Primer persona esta por debajo de su peso ideal</p>";
            }

            else if ($imc1 == 0 ) {
                echo "<p>Primer persona esta en su peso ideal</p>";
            }

            else if ($imc1 == -1) {
                echo "<p>Primer persona esta por encima de su peso</p>";
            } 

            else if ($imc1 == 2)  {
                echo "<p>Error en determinar el IMC</p>";
            }

            else {
                echo "<p>Error en determinar el IMC</p>";
            }


            $mayorEdad1 = $primerPersona -> esMayorDeEdad($primerPersona ->getEdad());

            // Dentro de la variable "mayorEdad1" almaceno el valor del metodo "esMayorDeEdad"

            echo "Primera persona " . $mayorEdad1;
            

            // Segunda Persona
            // En este objeto asigno los valores de manera manual

            $segundaPersona = new Persona("Milan Milanes Cajiao Morera", 2, "M");
            echo "<p>Segunda persona:</p>";
            echo $segundaPersona->toString();
            
            $imc2 = $segundaPersona -> calcularIMC($segundaPersona->getPeso(),  $segundaPersona->getAltura());

            if ($imc2 == 1) {
                echo "<p>Segunda persona esta por debajo de su peso ideal</p>";
            }

            else if ($imc2 == 0 ) {
                echo "<p>Segunda persona esta en su peso ideal</p>";
            }

            else if ($imc2 == -1) {
                echo "<p>Segunda persona esta por encima de su peso</p>";
            } 

            else if ($imc2 == 2)  {
                echo "<p>Error en determinar el IMC</p>";
            }

            else {
                echo "<p>Error en determinar el IMC</p>";
            }

            $mayorEdad2 = $segundaPersona -> esMayorDeEdad($segundaPersona -> getedad());

            echo "Segunda persona " . $mayorEdad2;

            // Tercera Persona
            // En este objeto asigno los valores de manera manual

            $terceraPersona = new Persona();
            echo "<p>Tercera persona:</p>";
            echo $terceraPersona->toString();
            
            $imc3 = $terceraPersona -> calcularIMC($terceraPersona -> getPeso(), $terceraPersona -> getAltura());

            if ($imc3 == 1) {
                echo "<p>Tercera persona esta por debajo de su peso ideal</p>";
            }

            else if ($imc3 == 0 ) {
                echo "<p>Tercera persona esta en su peso ideal</p>";
            }

            else if ($imc3 == -1) {
                echo "<p>Tercera persona esta por encima de su peso</p>";
            } 

            else if ($imc3 == 2)  {
                echo "<p>Error en determinar el IMC</p>";
            }

            else {
                echo "<p>Error en determinar el IMC</p>";
            }

            $mayorEdad3 = $terceraPersona -> esMayorDeEdad($terceraPersona -> getedad());

            echo "Tercera persona " . $mayorEdad3;

        }

        
        ?>

    </center>

</body>
</html>
