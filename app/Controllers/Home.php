<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    

  
    public function testprueba1()
    {

        $variable = array(

        "Usuario" => "Auron",
        "Apellidos" => "Del Pezo",
        "Ciudad" => "Santa Elena",
        "Direccion" => "Montañita",
        "Carrera" => "Tics",
        "Semestre" => "6",
        "Telefono" => "0000000000" 

        );
    return $this->response->setJSON($variable);
    

    }
    
}