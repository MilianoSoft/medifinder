<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Usuario;
use MVC\Router;

class DasboardController extends ActiveRecord{

    public static function index( Router $router){

        $titulo = 'dasboard';
        $subtitulo="bienvenido al tablero principal";
        session_start();
        $tipo = $_SESSION['tipo'];
        isAuth();//valida la sesion
        $router->render('dasboard/index',[
           'titulo'=>$titulo,
           'tipo'=>$tipo,
           'subtitulo'=>$subtitulo
        ]);
    }

    //metodo de crear proyectos
    public static function crear_proyecto( Router $router){
        $alertas=[];
        $titulo = 'crear cita';
        session_start();
        isAuth();//valida la sesion
        $tipo = $_SESSION['tipo'];
        $router->render('dasboard/crear_proyecto',[
           'titulo'=>$titulo,
           'alertas'=>$alertas,
           'tipo'=>$tipo
        ]);
    }
    //metodo del perfl del usuario
    public static function perfil( Router $router){

        $titulo = 'perfil';
        session_start();
        $tipo = $_SESSION['tipo'];
        isAuth();//valida la sesion
        $router->render('dasboard/perfil',[
           'titulo'=>$titulo,
           'tipo'=>$tipo
        ]);
    }

}

?>