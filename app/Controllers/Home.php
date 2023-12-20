<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
          
            public function index(){
      
                $data['titulo'] = 'elegir compras';
       
                echo view('plantillas/Header', $data);// Cargar la plantilla del encabezado
       
               // Cargar la vista específica para esta acción
               echo view('Home/index'); // Cargar la vista específica para esta acción
       
               // Cargar la vista del pie de página
               echo view('plantillas/Footer');// Cargar la plantilla del pie de página
            }
}