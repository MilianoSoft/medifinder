<?php

namespace Model;

class Clinica extends ActiveRecord
{

    //creamos la tabla en el modelo
    protected static $tabla = 'clinica';

    //creamos las columnas de la tabla
    protected static $columnasDB = ['id', 'nombre'];

    public function __construct($arg = [])
    {
        $this->id = $arg['id'] ?? '';
        $this->nombre = $arg['nombre'] ?? '';
    }
}
