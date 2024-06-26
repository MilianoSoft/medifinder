<?php

namespace Model;

class Perfil_medico extends ActiveRecord{

    //creamos la tabla en el modelo
    protected static $tabla = 'pefil_medico';

    //creamos las columnas de la tabla
    protected static $columnasDB = ['id','m_apellido','cedula','sexo','fecha_nac','nacionalidad','imagen_perfil','especialidad','idusuario'];

 public function __construct($arg=[])
 {
        //arg es un arreglo vacio
        $this->id = $arg['id']?? null;
        $this->m_apellido = $arg['m_apellido']?? null;
        $this->cedula = $arg['cedula']?? null;
        $this->sexo = $arg['sexo']?? null;
        $this->fecha_nac = $arg['fecha_nac']?? null;
        $this->nacionalidad = $arg['nacionalidad']?? null;
        $this->provincia = $arg['provincia']?? null;
        $this->municipio = $arg['municipio']?? null;
        $this->direcion = $arg['direcion']?? null;
        $this->imagen = $arg['imagen']??'sin-foto';

    }

    public function sincronizar1($args){

        foreach($args as $key => $value) {
            if(property_exists($this, $key) && !is_null($value)) {
              $this->$key = $value;
            }
          }
    }
    
}
