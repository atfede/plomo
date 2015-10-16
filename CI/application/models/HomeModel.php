<?php

class Persona extends CI_Controller {
    
    public function getData(){
        $query = $this->db->get('usuarios');
        return $query->result(); //pone los datos en un array y lo devuelve
    }
    
}
