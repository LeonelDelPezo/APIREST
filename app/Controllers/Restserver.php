<?php

namespace App\Controllers;

class Restserver extends BaseController
{
    public function test_get()
    {
        $array = ["Hola", "Mundo", "programacion"];
        return $this->response->setJSON($array);
    }

    public function login()
    {
        // Puedes realizar cualquier lógica necesaria para el proceso de inicio de sesión aquí

        // Supongamos que quieres devolver un JSON indicando que el inicio de sesión fue exitoso
        $response = [
            'status' => 'success',
            'message' => 'Inicio de sesión exitoso',
            'data' => [
                'user_id' => 123,
                'username' => 'usuarioEjemplo',
                // Otros datos relevantes para el inicio de sesión
            ]
        ];

        return $this->response->setJSON($response);
    }
}