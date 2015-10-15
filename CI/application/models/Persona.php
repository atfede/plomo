<?php

class Persona {
   // public $telefono;
    //atributos
    public $nombre;
    private $apellido;
    protected $nombreCompleto;

    //constructor
    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nombreCompleto = $this->nombre + " " + $this->apellido;
    }

    //properties
    public function getApellido() {
        return $this->apellido;
    }

    public function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    //fin properties
    //funciones
    public function hacerAlgo() { //no hace falta poner public
        echo 'acá imprimo con echo, en pantalla este mensaje';
    }

    public function otraFuncion() {
        return 2 + 2;
    }

    public function __toString() {
        echo "Nombre: " + $this->nombre + " " + "Apellido: " + $this->apellido + " " + $this->nombreCompleto;
    }

    //fin funciones
}
