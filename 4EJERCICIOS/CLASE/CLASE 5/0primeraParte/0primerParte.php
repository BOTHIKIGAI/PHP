<?php 

class Vehiculo {

    private $tipo = "";
    private $nroRuedas = 0;
    private $nroPuertas = 0;

    public function __construct(string $tipo, int $nroR, int $nroP) {

        $this -> tipo = $tipo;

        if ($nroR <= 0 ) {

            $this -> nroRuedas = 2;

        }

        else {

            $this -> nroRuedas = $nroR;

        }

        if ($nroP < 0 ) {

            $this -> nroPuertas = 0;

        }

        else {

            $this -> nroPuertas = $nroP;

        }


    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setNroRuedas($nroRuedas) {
        $this->nroRuedas = $nroRuedas;
    }

    public function setNroPuertas($nroPuertas) {
        $this->nroPuertas = $nroPuertas;
    }

    // Getters
    public function getTipo() {
        return $this->tipo;
    }

    public function getNroRuedas() {
        return $this->nroRuedas;
    }

    public function getNroPuertas() {
        return $this->nroPuertas;
    }

    public function toSting() {

        echo "Vehiculo: $this->tipo  Numero ruedas: $this->nroRuedas Numero puertas: $this->nroPuertas";

    }

}

?>
