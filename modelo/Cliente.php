<?php

class Cliente extends Persona {
    public $deuda;

    public function __construct($nombre,$edad,$deuda,$direccion) {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->deuda=$deuda;
        $this->direccion=$direccion;
    }
}