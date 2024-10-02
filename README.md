# Breve resumen de PHP

### Constantes

Una constante es un identificador para un solo valor. Y como el nombre lo sugiere este valor no puede cambiar durante el tiempo de ejecución del script (excepto las constantes magicas). Las constantes son case-sensitive. **Por convención los identificadores de constantes son siempre mayusculas**

El nombre de una constante sigue las mismmas reglas de cualquier etiqueta PHP. Un nombre valido de constante puede empezar con una letra o barra baja seguido por cualquier número de letras, npumeros o barras bajas

```php
<?php

// Valid constant names
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Invalid constant names
define("2FOO",    "something");

// This is valid, but should be avoided:
// PHP may one day provide a magical constant
// that will break your script
define("__FOO__", "something");

?>
```

El alcance de las constantes es global. Se puede acceder a las constantes desde cualquier lugar de un script sin tener en cuenta el alcance.

Usando define para definir una constante dentro de una clase, esta no funcionara como se esperam se tiene que usar const e inicializar un valor escalar, booleano, int, float, string (o array en php 5.6.+)

```php
<?php



define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.

define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.



//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.



class Constants

{

  //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.

  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.



  const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.

  const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.



  public static function getMinValue()

  {

    return self::MIN_VALUE;

  }



  public static function getMaxValue()

  {

    return self::MAX_VALUE;

  }

}



?>
```

Puedes acceder a esta constantes directamente:

- Escribiendo el nombre de la clase directamente
- Escribiendo dos punto
- Escribiendo el nombre de la constanten directamente

```php
<?php



#Example 1:

$min = Constants::MIN_VALUE;

$max = Constants::MAX_VALUE;



#Example 2:

$min = Constants::getMinValue();

$max = Constants::getMaxValue();



?>
```

### Programacion Orientada a Objetos con PHP

Revisar la documentacion oficial:
https://www.php.net/manual/es/language.oop5.php

#### Propiedades de una Clase

Tambien se las denomina atributos o campos. Estas se definene utilizando las palabras reservadas **_public, protected, o private_** a partir de php 7.1.0

- A los atributos de una clase declarados como **public** se puede acceder desde donde sea
- A los atributos de una clase declarados como **protected** se puede acceder solo desde la misma clase, mediante clases heredadas o desde la clase padre
- A los atributos de una clase declarados como **private** unicamente se puede acceder desde la clase que los definio

```php
<?php
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';
}
```
