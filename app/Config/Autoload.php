<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    public $psr4 = [
        APP_NAMESPACE => APPPATH,
        'Config'      => APPPATH . 'Config',
    ];

    public $classmap = [];

    public $files = [];

    // Agrega las líneas siguientes para cargar automáticamente las bibliotecas y helpers
    public $libraries = [
        'form_validation',
        'database',
    ];

    public $helpers = [
        'url',
        'form',
    ];
}
