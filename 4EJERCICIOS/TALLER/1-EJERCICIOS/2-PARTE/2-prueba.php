<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanes - Segundo Punto</title>
</head>
<body>
    
    <h1>Segundo Punto</h1>
    <hr>
    <br>

    <center>

        <h3>Formulario personas</h3>
        <br>
        <form action="" method="post">

            <label for="nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre">
            <br><br>

            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion">
            <br><br>

            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento">
            <br><br>

            <label for="genero">Genero</label>
            <select name="genero" id="genero">

                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>

            </select>
            <br><br>

            <label for="tipoPersona">Tipo de persona</label>
            <select name="tipoPersona" id="tipoPersona">

                <option value="General">General</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Empleado">Empleado</option>
                <option value="Estudiante-Empleado">Estudiante-Empleado</option>

            </select>
            <br><br>

            <button type="submit" name="enviar" value="enviar">Guardar</button>

        </form>
        <br>

        <h3>Listar</h3>

        <?php

            // Llamar a los documentos

            require_once("0-claseEntidad.php");
            require_once("1-clasePersona.php");

            // Crear los objetos de general

            $personaGeneral1 = new PersonaBase("Juan Esteban Cajiao Madero", "Avenida Cajiao Cr Juanes", "25/06/2003", "Masculino", "General" );
            $personaGeneral2 = new PersonaBase("Manuel de la Cruz", "Avenida de la Cruz Transv. Manu", "31/01/2006", "Masculino", "General" );
            $personaGeneral3 = new PersonaBase("Gabriela Martinez", "Avenida Martinez - Gal", "17/09/2000", "Femenino", "General" );

            // Crear los objetos de estudiante

            $personaEstudiante1 = new PersonaBase("Niyireth Morera Benavides" , "Avenida Bena Cr Benavide", "28/03/2004", "Femenino", "Estudiante");
            $personaEstudiante2 = new PersonaBase("Milan Milanesa Morera Cajiao" , "Calle Milan - Benavide", "23/03/2021", "Masculino", "Estudiante");
            $personaEstudiante3 = new PersonaBase("Lasna Morera Cajiao" , "Carrera Lasna - Moca", "14/09/1999", "Femenino", "Estudiante");

            // Crear los objetos de empleado

            $personaEmpleado1 = new PersonaBase("Enrique Portal" , "Cr 123 # 12 / 10", "01/04/2004", "Masculino", "Empleado");
            $personaEmpleado2 = new PersonaBase("Silvester Estefano Rendon" , "Cll 14 # 54 - 65", "09/06/2005", "Masculino", "Empleado");
            $personaEmpleado3 = new PersonaBase("Bruno Diaz" , "Cr 71 # 30 / 10", "18/01/2000", "Femenino", "Empleado");

            // Crear los objetos de Estudiante-Empleado

            $personaEstu_Emple1 = new PersonaBase("Carolina Ramirez" , "Cll 116 # 101 - 40", "10/01/2000", "Femenino", "Estudiante/Empleado");
            $personaEstu_Emple2 = new PersonaBase("Felipe Ortiz", "Cr 10 # 13 - 57", "20/08/2005", "Masculino", "Estudiante/Empleado");
            $personaEstu_Emple3 = new PersonaBase("Joshua Marrugo", "Cll 54 # 10 - 57", "06/07/2002", "Masculino", "Estudiante/Empleado");

            // Inicializar el objeto con su nombre

            $entidad = new Entidad("Colegio del Carme");

            // Agregar al array mediante el metodo dentro de la clase entidad

            $entidad -> addPersonaGeneral($personaGeneral1);
            $entidad -> addPersonaGeneral($personaGeneral2);
            $entidad -> addPersonaGeneral($personaGeneral3);

            $entidad -> addPersonaEstudiante($personaEstudiante1);
            $entidad -> addPersonaEstudiante($personaEstudiante2);
            $entidad -> addPersonaEstudiante($personaEstudiante3);

            $entidad -> addPersonaEmpleado($personaEmpleado1);
            $entidad -> addPersonaEmpleado($personaEmpleado2);
            $entidad -> addPersonaEmpleado($personaEmpleado3);

            $entidad -> addPersonaEstudiate_Empleado($personaEstu_Emple1);
            $entidad -> addPersonaEstudiate_Empleado($personaEstu_Emple2);
            $entidad -> addPersonaEstudiate_Empleado($personaEstu_Emple3);

            // for each 

            foreach($entidad->getListaGeneral() as $personGen) {
                echo ($personGen->toString(). "<br>");
            }

            echo "<br><br>";

            foreach($entidad->getListaEstudiante() as $personGen) {
                echo ($personGen->toString(). "<br>");
            }

            echo "<br><br>";

            foreach($entidad->getListaEmpleado() as $personGen) {
                echo ($personGen->toString(). "<br>");
            }

            echo "<br><br>";

            foreach($entidad->getListaEstudianteEmpleado() as $personGen) {
                echo ($personGen->toString(). "<br>");
            }

        ?>

    </center>   

</body>
</html>