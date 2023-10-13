<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novena Parte - Math</title>
</head>
<body>
    
    <?php
    
        // Pi

        echo(pi());
        echo "<br>";

        // Min and Max

        echo(min(0, 150, 30, 20, -8, -200));  // returns -200
        echo "<br>";
        echo(max(0, 150, 30, 20, -8, -200));  // returns 150
        echo "<br>";

        // Abs

        echo(abs(-6.7));  // returns 6.7
        echo "<br>";

        // Sqrt()

        echo(sqrt(64));  // returns 8
        echo "<br>";

        // round()

        echo(round(0.60));  // returns 1
        echo "<br>";
	    echo(round(0.49));  // returns 0
        echo "<br>";

        // rand
        echo(rand(10, 100));

    ?>  

</body>
</html>