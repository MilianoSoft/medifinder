<?php

namespace Model;

class Perfil extends ActiveRecord{

    //creamos la tabla en el modelo
    protected static $tabla = 'paciente_perfil';

    //creamos las columnas de la tabla
    protected static $columnasDB = ['id','id_paciente','m_apellido','cedula','sexo','fecha_nac','estado_civil','nacionalidad','provincia','municipio','direcion','imagen'];

 public function __construct($arg=[])
 {
        //arg es un arreglo vacio
        $this->id = $arg['id']?? null;
        $this->id_paciente= $arg['id_paciente']?? null;
        $this->m_apellido = $arg['m_apellido']?? null;
        $this->cedula = $arg['cedula']?? null;
        $this->sexo = $arg['sexo']?? null;
        $this->fecha_nac = $arg['fecha_nac']?? null;
        $this->estado_civil = $arg['estado_civil']?? null;
        $this->nacionalidad = $arg['nacionalidad']?? null;
        $this->provincia = $arg['provincia']?? null;
        $this->municipio = $arg['municipio']?? null;
        $this->direcion = $arg['direcion']?? null;
        $this->imgen = $arg['imagen']?? null;

    }

    
}
