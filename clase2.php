<?php

// clase de dominio:
// objeto de dominio:
// esta clase, tiene campos y tiene funciones.
class Rectangulo {
    // campos:
    public $alto;
    public $ancho;
    // constructor.
    public function __construct($alto,$ancho) {
        $this->alto = $alto;
        $this->ancho=$ancho;        
    }
    // funcion, o llamado metodo:
    public function calcularArea() {
        $resultado=$this->alto*$this->ancho;
        return $resultado;
    }
    public function calcularPerimetro() {
        $resultado=$this->alto*2 + $this->ancho*2;
        return $resultado;
    }
}

$rec=new Rectangulo(10,10);

echo $rec->calcularArea();
echo "\n";
echo $rec->calcularPerimetro();