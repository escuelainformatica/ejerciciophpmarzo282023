<?php
// clase de dominio:
class Encomienda {
    // variable a nivel de la clase (campos, miembros)
    // cuando el campo es public, se puede llamar desde afuera:
    public $alto; // public: es accesible dentro y fuera
    public $ancho;
    public $largo;
    public $destinatario;
    public $remitente;
    private $factor=20; // private: solo es accesible dentro de la clase

    public function __construct(int $alto,int $ancho,int $largo,string $destinatario,string $remitente) {
        $this->alto=$alto;
        $this->ancho=$ancho;
        $this->largo=$largo;
        $this->destinatario=$destinatario;
        $this->remitente=$remitente;
    }
    public function calculoEnvio()
    {
        // variable local que solo funciona dentro del bloque de codigo que se escribio, $resultado solo es valido dentro de la funcion
        $resultado=$this->alto*$this->ancho*$this->largo*$this->factor;
        return $resultado;
    }
}
// variable fuera de una clase se llama variable global. es decir $obj es una variable global
$obj=new Encomienda(2,2,2,"valdivia","santiago");
$obj->alto=20;
// $obj->factor=40; // Error: Cannot access private property Encomienda::$factor in C:\Apache24\htdocs\28marzo\clase3.php on line 29
echo $obj->calculoEnvio();
echo "\n";
$obj2=new Encomienda(3,4,5,"valdivia","santiago");
echo $obj2->calculoEnvio();