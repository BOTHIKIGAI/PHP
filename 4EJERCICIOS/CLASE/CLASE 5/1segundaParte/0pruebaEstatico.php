<?php 

    class Saludo {

        static $conts = 0;

        public static function bienvenida(string $nombre) {

            self::$conts++;
            echo self::$conts;
            echo "Hola " . $nombre . ", bienvenido <br>";

        }

        public static function despedida(string $nombre) {

            echo "Adios " . $nombre . ".";

        }

    }

    Saludo::bienvenida("Juanes");
    Saludo::bienvenida("Arabella");
    Saludo::bienvenida("Milan");
    Saludo::despedida("Juanes");

?>