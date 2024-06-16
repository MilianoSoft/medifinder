<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\DasboardController;
use Controllers\LoginController;
use MVC\Router;
$router = new Router();

//RUTAS PARA LA PAGINA PRINCIPAL EL HOME
//accedemos a la pagina principal 

//RUTAS DEL LOGIN DEL SISTEMA
$router->get('/',[LoginController::class,'home']);
//metodo para llamar el login
$router->get('/login',[LoginController::class,'login']);
//metodo para enviar el login
$router->post('/login',[LoginController::class,'login']);
//logaut para cerrrar la sesion del usuario
$router->get('/logout',[LoginController::class,'logout']);

//PARTE DE CREAR CUENTA
//creando la cuenta
$router->get('/crear',[LoginController::class,'crear']);
$router->post('/crear',[LoginController::class,'crear']);

//OVIDE MI PASSWORD
//rutas para olvidar la contrasenia
$router->get('/olvide',[LoginController::class,'olvide']);
$router->post('/olvide',[LoginController::class,'olvide']);

//RESTABLECER PASSWORD
//rutas para olvidar la contrasenia
$router->get('/restablecer',[LoginController::class,'restablecer']);
$router->post('/restablecer',[LoginController::class,'restablecer']);


//MENSAJE DE CONFIRMACION
//rutas para enviar el mensaje para confirmar tu password
$router->get('/mensaje',[LoginController::class,'mensaje']);
$router->get('/confirmar',[LoginController::class,'confirmar']);

//PANEL DE ADMINISTRACION DASBOARD
//rutas del dasboard
$router->get('/dasboard',[DasboardController::class,'index']);
$router->post('/dasboard',[DasboardController::class,'index']);
$router->get('/paciente',[DasboardController::class,'paciente']);
$router->post('/paciente',[DasboardController::class,'paciente']);
$router->get('/perfil',[DasboardController::class,'perfil']);
$router->post('/perfil',[DasboardController::class,'perfil']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();