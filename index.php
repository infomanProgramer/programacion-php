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
    

$a = new ClaseSencilla();
$a->mostrarVar();


//La siguiente sentencia genera un error al llamar a un método no estatico
ClaseSencilla::showGravedadConstant();



