<!-- Archivo: app/Views/plantillas/Header.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($titulo) ?> | CARRITO_DE_COMPRAS</title>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <style>
        /* Agregar estilos adicionales según sea necesario */
        .navbar-brand {
            font-weight: bold; /* Hace que el texto del navbar-brand sea más grueso */
            font-size: 1.5rem; /* Tamaño de fuente más grande */
        }

        .navbar-nav {
            background-color: #f8f9fa; /* Fondo más claro para el navbar-nav */
            border-radius: 5px; /* Bordes redondeados */
        }

        .nav-item {
            margin-right: 10px; /* Espaciado entre elementos del menú */
        }

        .navbar-nav > li {
            display: inline-block; /* Muestra los elementos del menú en línea */
            vertical-align: middle; /* Alinea verticalmente los elementos del menú */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('/') ?>">CARRITO_DE_COMPRAS</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto"> <!-- ml-auto alinea los elementos a la derecha -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('contactos') ?>">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('contactos/Agregar') ?>">Agregar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>