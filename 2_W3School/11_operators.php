<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oceava Parte - Operators</title>
</head>
<body>
    
    <?php 
    
        /*
        
            Arithmetic Operators...
            ...are used with numeric values to perfom commin arithmetical operations
            
            Operator | Name
            +        | Addition
            -        | Subtraction
            *        | Multiplication
            /        | Division 
            %        | Modulus
            **       | Exponentiation
            
        */

        $x = 2;
        $y = 4;
        $result;

        // Adition
        $result = $x + $y; // output 6
        echo $result . "<br>";

        // Subtraction
        $result = $x - $y; // output -2
        echo $result . "<br>";

        // Multiplication
        $result = $x * $y; // output 8
        echo $result . "<br>";

        // Division
        $result = $x / $y; // output 0.5
        echo $result . "<br>";

        // Modulus
        $result = $y / $x; // output 0
        echo $result . "<br>";

        // Exponentiation
        $result = $x ** $y; // output 16
        echo $result . "<br>";


        /* 
        
            Assignment Operators...
            ...are used with numeric values to write a values to a variable.
            The bassic assignment operator in PHP is " = "
            

            Assigment | Same as
            x = y     | x = y
            x += y    | x = x + y
            x -= y    | x = x - y
            x *= y    | x = x * y
            x /= y    | x = x / y
            x %= y    | x = x % y


        */

        // Assigment

        $y = $x;
        // $x = 2 and $y = 4, but $y right now value 2. because assignment the value of $x
        $y = 4;
        // $y change his value agai to his before value


        // Assigment addition
        $x += $y; // output 6

        
        // Assigment Subtraction
        $x -= $y; // output -4

        
        // Assigment Multiplication 
        $x *= $y; // output 8

        
        // Assigment Division
        $x /= $y; // output 0.5


        // Assigment Modulus
        $y %= $x; // output 0

        /* 
        
            Comparasion operator...
            are used to compare two values (number or string)

            Operator |   Name                   | Example
            ==       | Equal                    | $x == $y
            ===      | Identical                | $x === $y
            !=       | Not equal                | $x != $y
            < >      | Not equal                | $x < > $y
            !==      | Not identical            | $x !== $y
            >        | Greather than            | $x > $y
            <        | Less than                | $x < $y
            >=       | Greather than or equal to| $x >= $y
            <=       | Less than or equal to    | $x <= $y
            <=>      | Spaceship                | $x <=> $y
        
        */

        $x = 2;
        $y = 4;
        $result;

        // Equal
        $result = $x == $y;
        var_dump(boolval($result)); // output false
        echo "<br>";

        // Identical
        $result = $x === $y;
        var_dump(boolval($result)); // output false
        echo "<br>";

        // Not equal
        $result = $x != $y;
        var_dump(boolval($result)); // output true
        echo "<br>";

        // Not equal
        $result = $x <> $y;
        var_dump(boolval($result)); // output true
        echo "<br>";

        // Not identical
        $result = $x !== $y;
        var_dump(boolval($result)); // output true
        echo "<br>";

        // Greather than
        $result = $x > $y;
        var_dump(boolval($result)); // output false
        echo "<br>";
    
        // Less than
        $result = $x < $y;
        var_dump(boolval($result)); // output false
        echo "<br>";

        // Greather than or equal to
        $result = $x <= $y;
        var_dump(boolval($result)); // output false
        echo "<br>";

        // Spaceship
        $result = $x <=> $y;
        var_dump(boolval($result)); // output true
        echo "<br>";

        /* 
        
            Increment / Decrement Operators

            Used to increment a variable's value.

            Operator | Name
            ++$x     | Pre - increment
            $x++     | Post - increment
            --$x     | Pre - decrement
            $x--     | Post - decrement

        */

        // $x = 2

        // Pre - Increment
        ++$x;
        echo $x . "<br>"; // output 3, now $x = 3

        // Post - Increment
        $x ++;
        echo $x . "<br>"; // output 4, now $x = 4

        // Pre - decrement
        --$x . "<br>";
        echo $x . "<br>"; // output 3, now $x = 3

        // Post - increment
        $x--;
        echo $x . "<br>"; // output 2, now again $x is equal to 2

        
        /*
        
            Logical operator

            Used to combine conditional statements

            Operator | Name | Result
            &&       | And  | True if both $x and $y are true
            ||       | Or   | True if either $x or $y is true
            !        | Not  | True if $x is not true


        */

        $x = 2;
        $y = 4;
        $result;

        // &&  - And
        $result = ($x == 2 && $y == 2); 
        var_dump(boolval($result)); // Output false
        echo "<br>";

        // ||  - Or
        $result = ($x == 2 || $y == 2); 
        var_dump(boolval($result)); // output true
        echo "<br>";

        // ! - Not
        $result = ($x != 2);
        var_dump(boolval($result)); // output true
        echo "<br>";

        /* 
        
            Conditional Assigment Operators...
            Are used to set a value depending on conditions

            Operator | Name            | Example                        | Result
            ?:       | Ternary         | $x = expr1 ? expr2 : expr3     | Returns the value of $x is expre2 if expr1 - True
            ??       | Null coalescing | $x = expr1 ?? expr2            | The value of $x is expr3 if expr1 - False


        */

        # Ternary

        // Por ejemplo, el siguiente código asigna el valor de 10 a la variable $x si la variable $y
        // es mayor que 5,  y el valor de 20 si no:

        $y = 10;
        $x = $y > 5 ? 10 : 20;

        # Null coalescing


        $name = "Bard";
        $greeting = $name ?? "Guest";
        echo $greeting

    ?>

</body>
</html>