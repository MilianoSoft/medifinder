<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Usuario;
use MVC\Router;

class DasboardController extends ActiveRecord{

    public static function index( Router $router){

        $titulo = 'citas agendadas';
        session_start();
        isAuth();//valida la sesion
        $router->render('dasboard/index',[
           'titulo'=>$titulo
        ]);
    }

    //metodo de crear proyectos
    public static function crear_proyecto( Router $router){
        $alertas=[];
        $titulo = 'crear cita';
        session_start();
        isAuth();//valida la sesion
        $router->render('dasboard/crear_proyecto',[
           'titulo'=>$titulo,
           'alertas'=>$alertas
        ]);
    }
    //metodo del perfl del usuario
    public static function perfil( Router $router){

        $titulo = 'perfil';
        session_start();
        isAuth();//valida la sesion
        $router->render('dasboard/perfil',[
           'titulo'=>$titulo
        ]);
    }

}

?>