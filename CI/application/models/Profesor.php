<?php

class Profesor extends Persona {
    //Esto es una mierda!
    //atributos
    private $materias = Array();
    private $aniosExperiencia;

    //constructor
    public function __construct($materias, $aniosExperiencia) {
        $this->materias = $materias; // $array = ["Geografía, Literatura"]
        $this->aniosExperiencia = $aniosExperiencia;
    }

    //properties
    public function getMaterias() {
        return $this->materias;
    }

    public function getAniosExperiencia() {
        return $this->aniosExperiencia;
    }

    public function setMaterias($arrayMaterias) {
        $this->materias = $arrayMaterias;
    }

    public function setAniosExperiencia($anios) {
        $this->aniosExperiencia = $anios;
    }

    //fin properties
    //funciones
    public function ponerExamen() { //no hace falta poner public
        echo 'tomá un examen';
    }

    public function destruirPromedio() {
        echo 'tu promedio ha sido destruído';
    }

    public function __toString() {
        echo "Nombre: " + $this->nombre + " " + "Apellido: " + $this->apellido + " Años de experiencia: " + $this->aniosExperiencia;
    }

    //fin funciones
}
