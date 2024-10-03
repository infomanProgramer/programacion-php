<?php

class ClaseSencilla{
    public $var = "valor predeterminado";
    public $valorGravedad = 9;

    public function mostrarVar() {
        echo $this->var;
    }
    public function showGravedadConstant() {
        return $this->valorGravedad;
    }
}

class Usuario{
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getEdad(): int {
        return $this->edad;
    }
}
    

$a = new ClaseSencilla();

// $a->mostrarVar();
// echo "<br>";
//La siguiente sentencia genera un error al llamar a un método no estatico
//ClaseSencilla::showGravedadConstant();

//Usuario

$user = new Usuario("Carlos Cuellar", 22);

var_dump($user->getNombre());
echo "<br>";
var_dump($user->getEdad());
echo "<br>";

$user->setNombre("Juan Pablo");
$user->setEdad(66);

var_dump($user->getNombre());
echo "<br>";
var_dump($user->getEdad());
echo "<br>";

$user2 = new Usuario("Rafael Ortiz", 34);
var_dump($user2->getNombre());
echo "<br>";
var_dump($user2->getEdad());
echo "<br>";

//Acceso a las propiedades









