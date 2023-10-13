<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Septimo Parte - String</title>
</head>
<body>
    
    <?php 
    
        /*
        
            String 
            Is a sequence of characters

        */

        // Strlen
            // How many characters
        echo strlen("Hello world!"); // outputs 12
        echo "<br>";

        // str_word_count
            // How many words 
        echo str_word_count("Hello world!"); // outputs 2
        echo "<br>";

        // strrev
            // reverse string
        echo strrev("Hello world!"); // outputs !dlrow olleH
        echo "<br>";

        // strpos
            // Position of a word
        echo strpos("Hello world!", "world"); // outputs 6
        echo "<br>";

        // str_replace
            // Replaces some charactees with some other character in a string
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
        echo "<br>";

    ?>

</body>
</html>