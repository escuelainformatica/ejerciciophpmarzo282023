<?php
echo "ejecutando\n";

// lista de productos
// nombre: cocacola, precio: 500, categoria: bebida
// nombre: fanta, precio: 700, categoria: bebida

$nombre="cocacola";
$precio=500;
$categoria="bebida";

$nombre2="fanta";
$precio=700;
$categoria="bebida";


// que es una clase? es solo una definicion (plano)
class Producto {
    // campos,miembros
    public $nombre;
    public $precio;
    public $categoria;

    // funcion dentro de una clase, metodo.
    public function __construct($nom,$cat,$precio) {
        $this->nombre=$nom;
        $this->categoria=$cat;
        $this->precio=$precio;
    }
}

$prod1=new Producto("","","");
$prod1->nombre="cocacola";
$prod1->categoria="bebida";
$prod1->precio=500;

$prod2=new Producto("fanta",500,"bebida");

var_dump($prod1);
var_dump($prod2);