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
        

        public function __construct($nombre = "", $edad = 0, $genero = "M", $peso = 0, $altura = 0) { // ...realizar un llamado a un metodo llamado "__construct()", dentro del parentesis agregar las variables...
            $this -> nombre = $nombre;  // asignar los parametros a las propiedades de la clase usando "$this -> propiedad"
            $this -> edad = $edad;  
            $this -> genero = $genero;
            $this ->  peso = $peso;
            $this -> altura = $altura;
            $this -> DNI = mt_rand(10000000, 99999999);

        }

        // Get y set

        /*
        
            Los getters y setters se utilizar para acceder y modificar los atributos
            (propiedades) de una clase controlada. Estos son una practica que garantiza
            el encapsulamiento y el control de acceso a los datos internos de una clase

            getter(Obtener): Utilzado para obtener el valor de un atributo privado de 
            una clase desde afuera de la clase. 

            setter(Establecer): Utilizado para modificar el valor de un atributo privado 
            de una clase desde afuera de la clase

        */

            // Getters (obtener)

        public function getNombre() {
            return $this->nombre;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function getGenero() {
            return $this->genero;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function getDNI() {
            return $this->DNI;
        }

            // Setters (establecer)

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }

        public function setGenero($genero) {
            $this->genero = $genero;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function setDNI($dni) {
            $this->DNI = $dni;
        }

        // Funciones

        /*
        
            Para crear metodos dentro de PHP se usa la palabra reservada llamada "function" seguida del nombre de la funcion y los parametros que recibe.
            Este metodo puede ser publico, privado o protegido.

        */

            // Calcular IMC

        public function calcularIMC($peso, $altura) {

                 // Variable "imc" es la operación mediante la cual se obtiene el valor del "indice de masa corporal"
            $imc = $peso / ($altura*$altura);

            $resultado1 = 0;
                // Variable "resultado" es el

            if ($imc < 20) {
                $resultado1 = 1;
            }

            elseif ($imc > 20 and $imc < 25) {
                $resultado1 = 0;
            }

            else {
                $resultado1 = -1;
            }

            return $resultado1;
        }

            // Calcular si es mayor de edad o no

        public function esMayorDeEdad($edad) {

            $resultado2 = ""; // Variable "$resultado2" es la variable en la cual se almacenara un string con el resultado

            if ($edad >= 18) {
                $resultado2 = "Es mayor de edad";
            }

            else{
                $resultado2 = "Es menor de edad";
            }

            return $resultado2;
            
        }

            // Devolver información
        
        public function toString() {
            echo "Nombre: $this->nombre Edad: $this->edad DNI: $this->DNI Genero: $this->genero Peso: $this->peso Altura: $this->altura";
        }


    }

?>