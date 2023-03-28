<?php

// clase de modelo:
class Empleado extends Persona {
    public $salario;

    public function __construct($nombre,$edad,$salario,$direccion) {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->salario=$salario;
        $this->direccion=$direccion;
    }
}