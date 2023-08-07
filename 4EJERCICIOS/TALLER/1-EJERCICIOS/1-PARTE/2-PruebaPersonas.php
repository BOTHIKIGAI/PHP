<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanes - Clase Persona</title>
</head>
<body>
    
    <!--

    Ahora, crea una clase o un programa en PHP ejecutable que haga lo siguiente:
    
     Pide con un formulario en HTML el nombre, la edad, sexo, peso y altura.
    
     Crea 3 objetos de la clase anterior Persona, el primer objeto obtendrá las anteriores
    variables pedidas, el segundo objeto obtendrá todos los anteriores menos el peso y la altura
    y el último por defecto, para este último utiliza los métodos set para darle a los atributos un
    valor.
    
     Para cada objeto, deberá comprobar si está en su peso ideal, tiene sobrepeso o por debajo
    de su peso ideal con un mensaje.
    
     Indicar para cada objeto si es mayor de edad.
    
     Por último, mostrar la información de cada objeto.
    Puede usar métodos en la clase ejecutable, para que sea más fácil.

    -->

    <h1>Taller 3 POO - Primer punto</h1>
    <hr>

    <center>

        <h2>Clase Persona</h2>
        <br>

        <!--

             Pide con un formulario en HTML el nombre, la edad, sexo, peso y altura.

        -->

        <form action="" method="post">

            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" placeholder="ingrese nombre...">
            <br><br>
            <label for="edad">Edad: </label>
            <input type="text" id="edad" placeholder="ingrese edad...">
            <br><br>
            <label for="sexo">Sexo: </label>
            <select name="sexo" id="sexo">

                <option value="H">Masculino</option>
                <option value="M">Femenino</option>

            </select>
            <br><br>
            <label for="peso">Peso: </label>
            <input type="number" id="peso" placeholder="ingrese peso...">
            <br><br>
            <label for="altura">Altura: </label>
            <input type="number" id="altura" placeholder="ingrese altura...">
            <br><br>
            <button type="submit" value="enviar">Guardar</button>

        </form>

        <?php

            require_once ("1-CLASEpersona.php");

            $personaNombre = $_POST['nombre'];
            $personaEdad = $_POST['edad'];
            $personaSexo = $_POST['sexo'];
            $personaPeso = $_POST['peso'];
            $personaAltura = $_POST['altura'];

            $primerPersona = new Persona($personaNombre, $personaEdad, $personaSexo, $personaPeso, $personaAltura);
            echo "Primer persona: ". $primerPersona->toString();
            

        ?>

    </center>

    <form action="">



    </form>

</body>
</html>