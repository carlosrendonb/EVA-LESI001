<?php

class Actividad {
    private $act_idActividad;
    private $act_nombre;
    private $act_descripcion;
    private $act_precioxpersona;
    private $act_idTipo;
    private $act_precioxgrupo;
    private $act_estado;
    private $act_imagen;
    
    public function __construct() {
        }
    public function getAct_idActividad(){
        return $this->act_idActividad;
    }    
    public function setAct_idActividad($id){
        $this->act_idActividad=$id;
    }
    public function getAct_nombre() {
        return $this->act_nombre;
    }

    public function getAct_descripcion() {
        return $this->act_descripcion;
    }

    public function getAct_precioxpersona() {
        return $this->act_precioxpersona;
    }

    public function getAct_idTipo() {
        return $this->act_idTipo;
    }

    public function getAct_precioxgrupo() {
        return $this->act_precioxgrupo;
    }

    public function getAct_estado() {
        return $this->act_estado;
    }
    
    public function getAct_imagen() {
        return $this->act_imagen;
    }

    public function setAct_nombre($act_nombre) {
        $this->act_nombre = $act_nombre;
    }

    public function setAct_descripcion($act_descripcion) {
        $this->act_descripcion = $act_descripcion;
    }

    public function setAct_precioxpersona($act_precioxpersona) {
        $this->act_precioxpersona = $act_precioxpersona;
    }

    public function setAct_idTipo($act_idTipo) {
        $this->act_idTipo = $act_idTipo;
    }

    public function setAct_precioxgrupo($act_precioxgrupo) {
        $this->act_precioxgrupo = $act_precioxgrupo;
    }

    public function setAct_estado($act_estado) {
        $this->act_estado = $act_estado;
    }
    
    public function setAct_imagen($act_imagen) {
        $this->act_imagen = $act_imagen;
    }

   
    
}
