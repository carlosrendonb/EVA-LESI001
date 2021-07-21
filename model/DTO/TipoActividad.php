<?php

class TipoActividad {
    private $tipo_act_id;
    private $tipo_act_nombre;
    private $tipo_act_estado;
    
    public function __construct() {
        
    }
    public function getTipo_act_id() {
        return $this->tipo_act_id;
    }

    public function getTipo_act_nombre() {
        return $this->tipo_act_nombre;
    }

    public function getTipo_act_estado() {
        return $this->tipo_act_estado;
    }

    public function setTipo_act_id($tipo_act_id) {
        $this->tipo_act_id = $tipo_act_id;
    }

    public function setTipo_act_nombre($tipo_act_nombre) {
        $this->tipo_act_nombre = $tipo_act_nombre;
    }

    public function setTipo_act_estado($tipo_act_estado) {
        $this->tipo_act_estado = $tipo_act_estado;
    }


    
}
