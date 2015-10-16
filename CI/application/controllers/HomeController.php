<?php

class HomeController extends Ci_controller {

   public function index() {
       $this->load->model("HomeModel"); //una vez que cargamos el modelo, podemos llamar sus funciones
       $data['records'] = $this->HomeModel->getData(); //tiene todos los resultados del array
       $this->load->view("index", $data);
        
    }

}
