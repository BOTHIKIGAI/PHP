<?php

// Creación clase persona

    class Persona { // usualmente las clases se nombran en mayusculas

        // Definición de atributos : Nombre - Edad - DNI - Genero - Peso - Altura
        // Los atributos se definen en PHP utilizando la declaración public dentro de la clase

        private $nombre; // Se definen como private porque no queremos que se acceda directamente a este ()
        private $edad;
        private $DNI;
        private $genero;
        private $peso;
        private $altura;

        // Constructor
        /* 
        
        Permite a los desarroladores declarar metodos constructores para las clases. Aquellas que tengan un método constructor lo invocaran en cada
        nuevo objeto creado, lo que lo hace idoneo para cualquier inicialización que el objetivo pueda necesitar antes de ser usado

        */

        // Para definirilos como parametros se debe...

        public function __construct($nombre = "", $edad = 0, $genero = "H", $peso = 0, $altura = 0) { // ...realizar un llamado a un metodo llamado "__construct()", dentro del parentesis agregar las variables...
            $this -> nombre = $nombre;  // asignar los parametros a las propiedades de la clase usando "$this -> propiedad"
            $this -> edad = $edad;  
            $this -> genero = $genero;
            $this ->  peso= $peso;
            $this ->  altura= $altura;

        }

        // Funciones

        /*
        
        Para crear metodos dentro de PHP se usa la palabra reservada llamada "function" seguida del nombre de la funcion y los parametros que recibe.
        Este metodo puede ser publico, privado o protegido.

        */

        public function calcularIMC($peso, $altura) {
            $imc = $peso / ($altura*$altura);
            $resultado = "";

            if ($imc < 20) {
                $resultado = 1;
            }

            elseif ($imc > 20 and $imc < 25) {
                $resultado = 0;
            }

            else {
                $resultado = -1;
            }
        }

        
    }

?>