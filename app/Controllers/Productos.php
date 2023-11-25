<?php

namespace App\Controllers;

class Productos extends BaseController
{

    public function index()
   {
    // Datos de ejemplo en formato JSON
    $data = [
        'mensaje' => 'Hola desde el controlador Productos',
        'productos' => [
            ['id' => 1, 'lechuga' => 'Producto A', 'precio' => 19.99],
            ['id' => 2, 'tomate' => 'Producto B', 'precio' => 29.99],
            ['id' => 3, 'pimiento' => 'Producto C', 'precio' => 39.99],
        ],
    ];

    // Devolver el JSON
    return $this->response->setJSON($data);
}
}