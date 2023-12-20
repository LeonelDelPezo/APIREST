<?php // Archivo: app/Controllers/Contacto_controller.php

namespace App\Controllers;

use CodeIgniter\Controller; // O puedes usar 'BaseController' en lugar de 'Controller'

class contactos extends Controller{
     public function Index(){

         // Puedes cambiar 'Título de la Página' por el título que desees
         $data['titulo'] = 'Pagina principal';

         echo view('plantillas/Header', $data);// Cargar la plantilla del encabezado

        // Cargar la vista específica para esta acción
        echo view('contactos/Index'); // Cargar la vista específica para esta acción

        // Cargar la vista del pie de página
        echo view('plantillas/Footer');// Cargar la plantilla del pie de página
    }
public function Agregar(){
    

        // Puedes cambiar 'Título de la Página' por el título que desees
        $data['titulo'] = 'Agregar a carrito ';

        echo view('plantillas/Header', $data);// Cargar la plantilla del encabezado

       // Cargar la vista específica para esta acción
       echo view('contactos/Agregar'); // Cargar la vista específica para esta acción

       // Cargar la vista del pie de página
       echo view('plantillas/Footer');// Cargar la plantilla del pie de página

    
}     
    
}
?>
