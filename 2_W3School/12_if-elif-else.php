<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duodecima Parte - If...Else...Elif</title>
</head>
<body>
    
    <?php 
    
        /* 

            # If
            --------------------------------------------------------
            The if statement executes some code if one condition is true

        */


        $t = date("H"); // Date with the specification H gives us the time in 24-hour format
	
        if ($t < "20") {
          echo "Have a good day!";
        }


    
    ?>

</body>
</html>