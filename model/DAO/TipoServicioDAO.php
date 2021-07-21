<?php

require_once 'model/Conexion.php';

class TipoServicioDAO {
    private $conexion;
    
    public function __construct() {
        $this->conexion = Conexion::getConexion();
    }
    
    public function consultar(){
        try{
            $sentencia = $this->conexion->prepare(
           "select * from tipo_servicio where tipo_serv_estado=1");
            $parametros = array();
            $sentencia->execute($parametros);
            $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        }catch(Exception $e){
            die($e->getMessage());
            die($e->getTrace());
        }   
    }

}