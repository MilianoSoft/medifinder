<?php

namespace Model;

class Seguro extends ActiveRecord
{

    //creamos la tabla en el modelo
    protected static $tabla = 'seguro';

    //creamos las columnas de la tabla
    protected static $columnasDB = ['id', 'nombre,imagen'];

    public function __construct($arg = [])
    {
        $this->id = $arg['id'] ?? '';
        $this->nombre = $arg['nombre'] ?? '';
        $this->imagen = $arg['imagen']??'';
    }
}
