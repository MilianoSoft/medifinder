<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Usuario;
use Model\Perfil;
use MVC\Router;

class DasboardController extends ActiveRecord
{

    public static function index(Router $router)
    {

        $titulo = 'dasboard';
        session_start();
        $tipo = $_SESSION['tipo'];
        isAuth(); //valida la sesion
        $router->render('dasboard/index', [
            'titulo' => $titulo,
            'tipo' => $tipo
        ]);
    }

    //metodo de crear proyectos
    public static function paciente(Router $router)
    {
        $alertas = [];
        $titulo = "paciente";
        session_start();
        isAuth(); //valida la sesion
        $tipo = $_SESSION['tipo'];
        $router->render('dasboard/paciente', [
            'titulo' => $titulo,
            'alertas' => $alertas,
            'tipo' => $tipo
        ]);
    }
    //metodo del perfl del usuario
    public static function perfil(Router $router)
    {
        $perfil = new Perfil();
        $titulo = 'perfil';
        session_start();
        $tipo = $_SESSION['tipo'];
        $email = $_SESSION['email'];
        isAuth(); //valida la sesion
        //obtengo los datos iniciales
        $usuario = Usuario::where('email', $email);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $perfil = new Perfil($_POST);
            // obtenemos la imagen que viene el servidor 


            
            $file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo

            
            $url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

            //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
            $url_insert = dirname(__DIR__) . "/public/img/img-perfil"; //Carpeta donde subiremos nuestros archivos

            //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
            $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

            //Si la carpeta no existe, la creamos
            if (!file_exists($url_insert)) {
                mkdir($url_insert, 0777, true);
            };

            //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
            if (move_uploaded_file($url_temp, $url_target)) {
                echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
            } else {
                echo "Ha habido un error al cargar tu archivo.";
            }




            debuguear($perfil);
        }
        $router->render('dasboard/perfil', [
            'usuario' => $usuario,
            'titulo' => $titulo,
            'tipo' => $tipo,
            'perfil' => $perfil
        ]);
    }
}
