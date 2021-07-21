<?php
require_once 'model/Conexion.php';

class TipoActividadDAO {
    private $conexion;
    
    public function __construct() {
        $this->conexion = Conexion::getConexion();
    }
    
    public function consultar(){
        try{
            $sentencia = $this->conexion->prepare(
           "select * from tipo_actividad where tipo_act_estado=1");
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
