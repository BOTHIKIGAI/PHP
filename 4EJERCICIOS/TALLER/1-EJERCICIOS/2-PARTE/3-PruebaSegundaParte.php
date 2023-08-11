<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanes - Segunda Parte</title>
</head>
<body>

    <h1>Taller 3 - Segunda Parte</h1>
    <hr>
    <br>
    <br>
    
    <center>

    <p>El formulario no esta vinculado para efectos practicos, si lo relaciono y genero variables tendre que generar un formulario para cada uno, hasta que enseñen como guardar objetos no podre realizar formularios</p>

    <form action="">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion"><br><br>
        <label for="fechaNacimiento">Fecha de Nacimiento</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento"><br><br>
        <label for="Genero">Genero</label>
        <select name="Geneero" id="Genero" name="Genero">

            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>

        </select><br><br>
        <label for="TipoPersona">Tipo de Persona</label>
        <select name="tipoPersona" id="tipoPersona" name="tipoPersona"><

            <option value="General">General</option>
            <option value="Estudiante">Estudiante</option>
            <option value="Empleado">Empleado</option>
            <option value="Empleado-Estudiante">Empleado-Estudiante</option>
            
        </select><br><br>

        <button type="submit" name="enviar" value="enviar">Guardar</button><br><br>

        <br><br>


    </form>

    

        <?php

            require_once ("2-claseHijaTipoPersona.php");

            echo "<h3>Primera Peronsa</h3>";
            $primerPersona = new TiPoPersona("Juan Esteban Cajiao Madero","Cr 156 # 151 c - 41" ,"25 de Junio - 2003" , "Masculino", "Estudiante");
            echo $primerPersona->toString() . "<br>";        

            echo "<h3>Segunda Peronsa</h3>";
            $segundaPersona = new TiPoPersona("Milan Cajiao Morera", "Cr 21 # 5 - 23 ", "23 de febrero - 2022", "Masculino", "Empleado");
            echo $segundaPersona -> toString() . "<br>";

            echo "<h3>Tercera Peronsa</h3>";
            $terceraPersona = new TiPoPersona("Arabella Cajiao Morera", "Cr 17 # 7 - 10", " 1 de Enero - 2040" , "Femenino", "Empleado-Estudiante");
            $terceraPersona -> toString() . "<br>";

            echo "<h3>Cuarta Persona</h3>";
            $cuartaPersona = new TiPoPersona("Tara Benavides", "Cr 21 # 5 - 23", "10 de Mayo - 2020" , "Femenimo", "General");
            $cuartaPersona ->toString() . "<br>";

            echo "<h3>Quinta Persona</h3>";
            $quintaPersona = new TiPoPersona("Pepito de la Cumbre", "Cumbre 5 de la Avenida Cumbre", "31/12/2023", "Masculino", "Estudiante");
            $quintaPersona -> toString() . "<br>";

        ?>

    <h1>Listar Personas</h1>
    <hr>
    <p>Las personas se listara de la siguiente manera: a) general; b) estudiantes; c) empleados; d) estudiantes empleados</p>
    <br>
    
        <?php

            

        ?>

    </center>
    
</body>
</html>