<?php

// clase de servicio.
class EmpleadoServicio extends PadreServicio {
    public function mostrar(Empleado $emp) {
        echo "Nombre :".$emp->nombre."\n";
        echo "Edad :".$emp->edad."\n";
        echo "Direccion :".$emp->direccion."\n";
        echo "Salario :".$emp->salario."\n";
    }
    public function ejemplo() {
        echo "esta funcion fue sobreescrita";
    }
}

