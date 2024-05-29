<?php

namespace Model;

class Ciudad extends ActiveRecord
{

    //creamos la tabla en el modelo
    protected static $tabla = 'ciudad';

    //creamos las columnas de la tabla
    protected static $columnasDB = ['id', 'nombre'];

    public function __construct($arg = [])
    {
        $this->id = $arg['id']??'';
        $this->nombre = $arg['nombre']??'';
    }
    
}
