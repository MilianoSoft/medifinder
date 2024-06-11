<?php

namespace Model;

class Usuario extends ActiveRecord{

    //creamos la tabla en el modelo
    protected static $tabla = 'usuarios';

    //creamos las columnas de la tabla
    protected static $columnasDB = ['id','nombre','apellido','telefono','email','password','tipo','confirmado','token'];

 public function __construct($arg=[])
 {
        //arg es un arreglo vacio
        $this->id = $arg['id']?? null;
        $this->nombre = $arg['nombre']?? null;
        $this->apellido = $arg['apellido']?? null;
        $this->telefono = $arg['telefono']?? null;
        $this->email = $arg['email']?? null;
        $this->password = $arg['password']?? null;
        $this->tipo = $arg['tipo']?? null;
        $this->confirmado = $arg['confirmado']?? 0;
        $this->token = $arg['token']?? null;

    }

    //metodo para crear la cuenta
    public function validarNuevaCuenta(){
        //si nombre esta vacio
        if(!$this->nombre){

            // al arreglo alertas agregamos un error
            self::$alertas['error'][]="El nombre del usuario es obligatorio";
        }
          //si nombre esta vacio
        if(!$this->email){

            // al arreglo alertas agregamos un error
            self::$alertas['error'][]="El email es obligatorio";
        }
        //validaciones para el password que no este vacio
        if(!$this->password){
             // al arreglo alertas agregamos un error
             self::$alertas['error'][]="El password no puede ir vacio";
        }
        //validaciones para el password numero de caracteres minimo
        if(strlen( $this->password)< 6){
             // al arreglo alertas agregamos un error
             self::$alertas['error'][]="El password debe tener almenos 6 caractetes";
        }
        //validar que no halla mas de dos tipos
        if( $this->tipo<0 && $this->tipo>3){
             // al arreglo alertas agregamos un error
             self::$alertas['error'][]="aceptamos solo registros de paciente y medico";
        }
        //validar que no halla mas de dos tipos
        if( $this->tipo==null){
             // al arreglo alertas agregamos un error
             self::$alertas['error'][]="seleccione un tipo de cuenta";
        }
        //retornamos alerta
        return self::$alertas;
    }

    //validar login
    public function validarLogin()
    {

        if (!$this->email) {
            self::$alertas['error'][] = 'El email es obligatorio ';
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            //esto verifica que sea un email valido
            self::$alertas['error'][] = 'El email no es valido ';
        }

        //validaciones para el password que no este vacio
        if (!$this->password) {
            // al arreglo alertas agregamos un error
            self::$alertas['error'][] = "El password no puede ir vacio";
        }
      
        //retornamos alerta
        return self::$alertas;
    }

    //metodo solo de usurio el cual hashea el password
    public function hashPassword()
    {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    //metodo para generar el token del usuario a registrar
    public function obtenerToken()
    {
        $this->token = uniqid($this->token);
    }

    //metodo para validar el email
    public function validarEmail()
    {

        if (!$this->email) {
            self::$alertas['error'][] = 'El email es obligatorio ';
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            //esto verifica que sea un email valido
            self::$alertas['error'][] = 'El email no es valido ';
        }
        //retorno alertas
        return self::$alertas;
    }

    public function validarPassword()
    {

        //validaciones para el password que no este vacio
        if (!$this->password) {
            // al arreglo alertas agregamos un error
            self::$alertas['error'][] = "El password no puede ir vacio";
        }
        //validaciones para el password numero de caracteres minimo
        if (strlen($this->password) < 6) {
            // al arreglo alertas agregamos un error
            self::$alertas['error'][] = "El password debe tener almenos 6 caractetes";
        }
        //retornamos alerta
        return self::$alertas;
    }
}
