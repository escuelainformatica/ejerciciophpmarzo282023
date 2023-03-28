<?php

include("modelo/Persona.php");
include("modelo/Empleado.php");
include("servicio/PadreServicio.php");
include("servicio/EmpleadoServicio.php");


$emp=new Empleado("john doe",33,2222,"sunset blv"); // OOP

$nombre="john doe"; // esto no es OOP
$edad=33;
$salario=2222; 


$servicio=new EmpleadoServicio();

$servicio->mostrar($emp);
$servicio->ejemplo();