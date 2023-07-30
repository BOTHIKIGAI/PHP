<?php

    // 

    $myfile = fopen("../archivo.php", "r") or
    die("Incapaz de abrir el archivo ");

    try {
        $num = filesize("acrhivo.php");
        if ($num == 0) {
            throw new Exception("La longitud del archivo del archivo es 0");
        }
        echo fread($myfile,$num);
        fclose($myfile);

    }

    catch(Exception $e) {
        echo ("<span style='color:red'> Error: ".$e->getMessage()."<span>");
    }

?>