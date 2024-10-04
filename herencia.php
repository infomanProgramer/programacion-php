<?php

class Persona{
    private int $id;
    private string $nombre;
    public function __construct(int $id, string $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function showMessage1(){
        echo "method (showMessage1) Mensaje lanzado desde Persona <br>";
    }

    public function showMessage2(){
        echo "method (showMessage) Mensaje lanzado desde Persona <br>";
    }
}

class Estudiante extends Persona{
    private string $carrera;
    private int $semestre;
    public function __construct(int $id, string $nombre, string $carrera, int $semestre) {
        parent::__construct($id, $nombre);
        $this->carrera = $carrera;
        $this->semestre = $semestre;
    }
    public function showMessage2(){
        echo "method (showMessage2) Mensaje lanzado desde Estudiante <br>";
    }
}


var_dump("Herencias en PHP <br>");

$estudiante = new Estudiante(1, "Rafael", "Informatica", 4);

$estudiante->showMessage1();

$estudiante->showMessage2();