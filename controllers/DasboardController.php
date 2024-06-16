<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Usuario;
use Model\Perfil;
use MVC\Router;

class DasboardController extends ActiveRecord{

    public static function index( Router $router){

        $titulo = 'dasboard';
        session_start();
        $tipo = $_SESSION['tipo'];
        isAuth();//valida la sesion
        $router->render('dasboard/index',[
           'titulo'=>$titulo,
           'tipo'=>$tipo
        ]);
    }

    //metodo de crear proyectos
    public static function paciente( Router $router){
        $alertas=[];
        $titulo = "paciente";
        session_start();
        isAuth();//valida la sesion
        $tipo = $_SESSION['tipo'];
        $router->render('dasboard/paciente',[
           'titulo'=>$titulo,
           'alertas'=>$alertas,
           'tipo'=>$tipo
        ]);
    }
    //metodo del perfl del usuario
    public static function perfil( Router $router){
       $perfil= new Perfil();
        $titulo = 'perfil';
        session_start();
        $tipo = $_SESSION['tipo'];
        $email =$_SESSION['email'];
        isAuth();//valida la sesion
        //obtengo los datos iniciales
        $usuario= Usuario::where('email',$email);

        if($_SERVER['REQUEST_METHOD']=='post'){
            debuguear($_POST);
        }
        $router->render('dasboard/perfil',[
            'usuario'=>$usuario,
           'titulo'=>$titulo,
           'tipo'=>$tipo,
           'perfil'=>$perfil
        ]);
    }

}

?>