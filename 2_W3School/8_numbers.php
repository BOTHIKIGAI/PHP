<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octava Parte - Numbers</title>
</head>
<body>
    
    <?php 
    
        /*
        
            Int
            A int number is a number whithout a decimal part
        
        */

        $x = 5985;
        var_dump(is_int($x)); // true because is a int
        echo "<br>";

        $x = 59.85; 
        var_dump(is_int($x)); // false because is not a int
        echo "<br>";

        /*
        
            Float
            A float is a number with a decimal point or a number in exponential form.
        
        */

        $x = 10.365;
        var_dump(is_float($x)); // true because is a float
        echo "<br>";

        /* 
        
            Infinity
            A numerical value that is larger than PHP_FLOAT_MAX is condifrtrf infinite
        
        */

        $x = 1.9e411;
        var_dump($x);
        echo "<br>"; // INF because is a larger than PHP_FLOAT_MAX

        /* 
        
            NaN
            NaN stands for Not a Number
        
        */

        $x = acos(8);
        var_dump($x); //NaN 
        echo "<br>";

        /*
        
            Numerical String
            Can be used to find whether a variable is numeric. The function
            return ture if the variable is a number or a numeric
        
        */

        $x = 5985;
        var_dump(is_numeric($x)); // Have numbers -> -> true
        echo "<br>";
        
        $x = "5985";
        var_dump(is_numeric($x)); // The string have numbers -> true
        echo "<br>";
        
        $x = "59.85" + 100;
        var_dump(is_numeric($x)); // The string have numbers -> true
        echo "<br>";
        
        $x = "Hello";
        var_dump(is_numeric($x)); // false because dont have numbers
        echo "<br>";

        /* 
        
            Float to Strig
        
        */

        // Cast float to int

        $x = 23465.768; // float
        $int_cast = (int)$x; // transfot to int
        echo $int_cast; 
        echo "<br> var int_cast is a "; 
        var_dump(is_int($int_cast));
        
        echo "<br>";

        // Cast string to int
        $x = "23465.768"; // number string float
        $int_cast = (int)$x; // transfor to int
        echo $int_cast; // 23465.768 like int
        echo "<br> var int_cast is a"; 
        var_dump(is_int($int_cast));

        

    ?>

</body>
</html>