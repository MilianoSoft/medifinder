<?php

namespace Controllers;

use classes\Email;
use Model\Ciudad;
use Model\Clinica;
use Model\Especialidad;
use Model\Seguro;
use Model\Usuario;
use MVC\Router;

//creo la clase Login Controller
class HomeController
{

    //funsion publica para acceder desde cualquier lugar
    //funsion estatica desde se llama sintener que instanciar la clase
    public static function home(Router $router)
    {
        $ciudad = Ciudad::all();
        $clinica = Clinica::all();
        $especialidad = Especialidad::all();
        $seguro = Seguro::all();
        //renderizando la vista  
        //el metodo render es un metodo de nuestro router 
        $router->render('home/home', [

            'ciudad' => $ciudad,
            'clinica' => $clinica,
            'especialidad' => $especialidad,
            'seguro' => $seguro,
            
        ]);
    }
}
