<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>

    <?php 
    
        /*
        
            Data type

            - String
            - Integer
            - Float
            - Boolean
            - Array
            - Object
            - Null
            - Resources

            If you want to know the data type can use var_dump( $variable )
        
        */

        /*
        
            String
            All String have inside quotes or doubles cuotes
        
        */

        $x = "Hello World!"; 
        $y = 'Hello world!';

        echo $x . "<br>";
        echo $y . "<br>";

        var_dump($x);
        echo "<br>";


        /*
        
            Integer
            An integer data tupe is a non-decimal number, this can to be positive or negative

        */

        $x = 59585; // An integer number
        var_dump($x); // int
        echo "<br>";

        /* 
        
            Float
            A float (floating point number) is a number with a decimal point (.) or a number

        */

        $x = 10.365; // A float number 
        var_dump($x); // float
        echo "<br>";


        /*
        
            Boolean
            A boolean represents two possible states: True or False

        */

        $y = true; // A boolean
        $x = false;

        var_dump($x, $y); // bool (false) bool (true)
        echo "<br>";

        /* 
        
            Array
            An array stores multiple values in one single variable
        
        */

        $cars = array("Volvo", "BMW", "Toyota"); // a variable array most to defie with the word array
        var_dump($cars); // array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
        echo "<br>";

        /*
        
            Object

            Clases and object are the two main aspects of object oriented programming.
            A class is a template for objects, and an objects is an instance of a class.
        
        */


        class Car { // data type class and his name is Car

            // Atributtes
            public $color;
            public $model;

            // Construct
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }

            // Methods
            public function message() {
              return "My car is a " . $this->color . " " . $this->model . "!";
            }

          }

          // Instantiation
          
          $myCar = new Car("black", "Volvo");
          echo $myCar -> message();
          echo "<br>";
          $myCar = new Car("red", "Toyota");
          echo $myCar -> message();
          echo "<br>";
        
        
        /* 
        
          Null

          Null is a special data type which an only one value: Null
          A variable of data type NULL is a variable that has no value assigned to it.
        
        */  

        $x = "Hello world!"; // The value of x is "Hello World" and this is a String
        $x = null; // Now, the value of x is Null and this is a null
        var_dump($x); //NULL 

    ?>
    
</body>
</html>