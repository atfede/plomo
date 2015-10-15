<?php

class Administrador extends Persona {

    //atributos
    private $empresa;

    //constructor
    public function __construct($empresa) {
        $this->empresa = $empresa;
    }

    //properties
    public function getEmpresa() {
        return $this->empresa;
    }

    public function setEmpresa($empresaTrabaja) {
        $this->empresa = $empresaTrabaja;
    }
    
    public function contratarEmpleado() {
        echo 'Felicidades, ha sido contratado!';
    }

    public function putearEmpleado() {
        echo 'uste es un inutil';
    }

    public function __toString() {
        echo 'Trabajo en: ' + $this->empresa;
    }

}
