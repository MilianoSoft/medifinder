<?php

namespace Model;

class Especialidad extends ActiveRecord
{

    //creamos la tabla en el modelo
    protected static $tabla = 'especialidad';

    //creamos las columnas de la tabla
    protected static $columnasDB = ['id', 'nombre'];

    public function __construct($arg = [])
    {
        $this->id = $arg['id'] ?? '';
        $this->nombre = $arg['nombre'] ?? '';
    }
}
