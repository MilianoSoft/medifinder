<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

// Función que revisa que el usuario este autenticado
function isAuth(): void
{
    if (!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

//verificar fichero y guardar imagen
function guardarImagen( $file)
{
    $ruta = "C:/xampp/htdocs/xampp/sistemaMedico/public/img/img-perfil";
    // Verifica si la carpeta no existe ya
    if (!file_exists($ruta)) {
        // Intenta crear la carpeta
        if (mkdir($ruta, 0777, true)) {
            echo "Carpeta creada exitosamente.";
        } else {
            echo "Error al crear la carpeta.";
        }
    } else {
        debuguear($file);
    }
       
}
