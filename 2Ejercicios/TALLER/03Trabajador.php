<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juanes</title>
</head>
<body>
    
    <!--

        Problema
            
            Crear un formulario que lea el nombre del trabajador, los días trabajados, las horas por día y el 
            costo por hora, con una función que al enviar el formulario se muestren los datos del 
            trabajador y su salario total.Validar los datos.

        Requisitos 

            - Formulario
            - Validadción ISSET
            - Nombre del trabajador, los dias trabajados, horas por dia y el coste por hora
            - Imprimir en pantalla datos

    -->

    <h1>Trabajador y paga</h1>

    <form action="" method="post">

        Nombre trabajador: <input type="text" name="nombreTrabajador">;
        Numero de dias trabajados: <input type="number" name="diasTrabajados">;
        Horas por dia: <input type="number" name="horasPorDia">;
        Coste por hora <input type="number" name="costePorHora">;
        <input type = "submit" value="Enviar">

    </form>

</body>
</html>