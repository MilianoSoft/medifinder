<?php

namespace Model;

class Medico extends ActiveRecord{
    //creamos la tabla en el modelo
    protected static $tabla = 'medico';

    //creamos las columnas de la tabla
    protected static $columnasDB = ['id', 'nombre','apellido','especialidad','telefono'];

    //constructor de la clase
    public function __construct($arg = [])
    {
        $this->id = $arg['id'] ?? '';
        $this->nombre = $arg['nombre'] ?? '';
        $this->apellido = $arg['nombre'] ?? '';
        $this-> = $arg['nombre'] ?? '';
        $this->nombre = $arg['nombre'] ?? '';
    }
}