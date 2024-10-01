<?php

class ClaseSencilla{
    public $var = "valor predeterminado";

    public function mostrarVar() {
        echo $this->var;
    }
}
    

$a = new ClaseSencilla();
$a->mostrarVar();



