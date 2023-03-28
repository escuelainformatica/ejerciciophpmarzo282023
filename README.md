# alcance de una variable

## global

Una variable que es accesible desde cualquier parte del codigo. La variable global se define fuera de un bloque de codigo o clase.

```php
$var="hola";
```

## campos

Un campo publico, en accesible dentro y fuera de la clase.  
Un campo privado, es accesible solo dentro de la clase.
Un campo protegido, es accesible dentro de la clase y sus herencias.


```php
class Ejemplo {
    public $campo1;
    private $campo2;
    protected $campo3;

    public function fn() {
        $this->campo1="hola"; // ok
        $this->campo2="hola"; // ok
        $this->campo3="hola"; // ok
    }
}

$obj=new Ejemplo();
$obj->campo1="hola"; // ok
$obj->campo2="hola"; // error.
$obj->campo3="hola"; // error.
```

## variables locales
Por ejemplo, las escritas dentro de una funcion.
Esta variable solo es valida dentro de la funcion que se definio.

```php
function hola() {
    $variablelocal="hola";
    echo $variablelocal; // ok
}
echo $variablelocal; // error.
```

## PHP

* 5.X es tecnologia que no debe usarse. Es codigo legacy.
  * no usa ni private,public o protected. Para los campos se usan var (publico)

```php
class Ejemplo {
    var $campo; // todos los campos son publicos
    function ejemplo() {}
}
```

* 6.X no existe.
* 7.X nuestro codigo es compatible desde esta version del codigo.

```php
class Ejemplo {
    public $campo; // se puede especificar el alcance del campo
    public function ejemplo() {}
}
```

* 8.x tiene soporte.

```php
class Ejemplo {
    public int $campo; // se puede especificar el alcance y tipo de dato
    public function ejemplo() {}
}
```


## tipos de clase

* clases de dominio: es una clase que hace de todo, tiene campos y tiene funciones.
* clase de modelo: es una clase que se refiere a datos, no se refiere a acciones.
    * Model (en Laravel)
* clase de servicio: es una clase que se refiere a acciones (o funciones), no se refiere a datos.
   *  web service: es una clase de servicio que se conecta en la web.
   * En laravel: Controller.

## Concepto

* OOP Programacion Orientada a objeto.
* SRP Responsabilidad de Principio Simple.
    * En vez de crear un codigo que haga de todo (por lo tanto, mas complicado), se crea varios codigos sencillos que hagan una funcion o solo una familia de funciones.
* SOLID no necesitamos esto en PHP.

