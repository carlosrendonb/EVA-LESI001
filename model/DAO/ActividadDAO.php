<?php

class ActividadDAO {
   private $conexion;
   
   public function __construct() {
       $this->conexion= 
               Conexion::getConexion();
   }
    
   public function consultar1(){
       try{
           //1. sentencia preparada
           $sen= $this->conexion->prepare(
                   "select * from actividad where act_estado=1");
           //2. declarar los parametros para 
           // la sentnecia
           $par = array();
           //3. ejecutar la sentencia
           $sen->execute($par);
           //4. obtener resultados 
           $res= $sen->fetchAll(PDO::FETCH_ASSOC);
           // el metodo fetchAll siempre retorna
           //un arreglo, 
           // el parametro q recibe determina el tipo
           //de datos del arreglo
           // ej FETCH_ASSOC retorna arreglo de datos
           // con indices asociativos
           //5. retornar resultados
           return $res;
       }catch(Exception $e){
           echo $e->getMessage();
       }
   }
   public function consultar2(){
       try {
            //1.sentencia preparada
            $sen = $this->conexion->prepare("select *from actividad");
            //2. declarar los parametros para la sentencia
            $par = array();
            //3. ejecutar la sentencia
            $sen->execute($par);
            //4. obtener resultados
            $res = $sen->fetchAll(PDO::FETCH_OBJ); // fetchall solo en select
            //el metodo fetchAll siempre retorna un arreglo
            //el parametro que recibe determina el tipo de datos del arreglo, este puede der objetos, arreglos de arreglos etc
            // ej FETCH_Obj RETONAR ARREGLO DE OBJETOS DE UNA CLASE ANONIMA CUYOS NOMBRE DE ATRIBUTOS SON IGUALES A LOS NOMBRES DE COLUMNAS EN LA BDD
            //5. retomar resultados
            return $res;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
   }
   
    public function consultar3($parametro){
       $sql = "select * from actividad inner join tipo_actividad on " .
                " act_idTipo = tipo_act_id where (act_nombre like " .
                "CONCAT('%',?,'%') or act_descripcion like CONCAT('%',?,'%'))" .
                "and act_estado=1";
        try {
            //1.sentencia preparada
            $sen = $this->conexion->prepare($sql);
            //2. declarar los parametros para la sentencia
            $par = array($parametro, $parametro);
            //3. ejecutar la sentencia
            $sen->execute($par);
            //4. obtener resultados
            $res = $sen->fetchAll(PDO::FETCH_ASSOC); // fetchall solo en select
            //el metodo fetchAll siempre retorna un arreglo
            //el parametro que recibe determina el tipo de datos del arreglo, este puede der objetos, arreglos de arreglos etc
            // ej FETCH_ASSOC retorna arreglo de datos con indices asociativos
            //5. retomar resultados
            return $res;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
   }
 
   public function insertar(Actividad $act){
       
       
        
       //sentencia de insercion				
    $sql="insert into actividad "
                    . "(act_nombre, act_descripcion, act_precioxpersona, act_precioxgrupo,"
                    . "act_idTipo, act_urlPhoto) values(?,?,?,?,?,?)";
                    
      try{
        //1. sentencia preparada
      $sen = $this->conexion->prepare($sql);
      //2. parametros de la sentencia
  
      
      $par = array($act->getAct_nombre(),
          $act->getAct_descripcion(),
          $act->getAct_precioxpersona(),
          $act->getAct_precioxgrupo(),
          $act->getAct_idTipo(),
          $act->getAct_imagen()
          );
      //3. ejecutar la sentencia
      $sen->execute($par);
      //4. obtener los resultados
      $res= $sen->rowCount();//obtener num
      ////filas afectadas
      //5. retornar resultados
      return $res;
      }catch(Exception $e){
          
      }finally{
          $this->conexion=null;
      }
      
   }
   
   public function editar(Actividad $act ){
       $sql = "update  actividad "
                . "set act_nombre=?, act_descripcion=?, act_precioxpersona=?, "
                . "act_precioxgrupo=?, act_idTipo=?, act_urlPhoto=? where act_idActividad=?";
        //1. sentencia preparada
        $se = $this->conexion->prepare($sql);
        //2.parametros de la sentencia
        $par = array($act->getAct_nombre(),
            $act->getAct_descripcion(),
            $act->getAct_precioxpersona(),
            $act->getAct_precioxgrupo(),
            $act->getAct_idTipo(),
            $act->getAct_imagen(),
            $act->getAct_idActividad()
            );
        
            
        //3. ejecutar la sentencia
        $se->execute($par);
        //4.obtener resultados
        $res = $se->rowCount();
        //5. retornar resultados
        return $res;
   }
   
   
   public function eliminar($id){
       //sentencia de eliminacion logica			
    $sql = "update  actividad set act_estado=0 where act_idActividad=?";
    try{   
    //1. prepara la sentencia
        $se= $this->conexion->prepare($sql);
        //2. paramtetros de la sentencia
        $par= array($id);
        //3. ejecutar al sentencia
        $se->execute($par);
        //4. obtener resultados
        $res= $se->rowCount();
        //5. retornar resultados
        return $res;
    }catch(Exception $e){ echo $e->getMessage();}

    }
   
   public function consultarxId($id){
       //llamada a store procedure//llamar al procedimnto almacenado
        $sql = "call getActividad(?)";
        //1.preparar la sentencia
        $se = $this->conexion->prepare($sql);
        //2.parametros de sentencia
        $par = array($id);
        //3.nejecutar la sentencia
        $se->execute($par);
        //4. obtener resultado, me retornaara muchos registros , este depende de que  tipo de sentencia ejecute 
        $res = $se->fetch(PDO::FETCH_OBJ);//metodo  fetchAll retorna un arreglo de tipo objeto de una clase anonima
        //metodo FETCH me retorna el primer elemento de los resultados que hayan
        //5. OBTENER RESULTADO
        return $res;
   }
   
    public function consultarxTipo($tipo){
        //1. sentencia preparada
            $sql="select * from actividad where act_estado=1 and act_idTipo=?";
       
           $sen= $this->conexion->prepare($sql);
           //2. declarar los parametros para 
           // la sentnecia
           $par = array($tipo);
           //3. ejecutar la sentencia
           $sen->execute($par);
           //4. obtener resultados 
           $res= $sen->fetchAll(PDO::FETCH_ASSOC);
           // el metodo fetchAll siempre retorna
           //un arreglo, 
           // el parametro q recibe determina el tipo
           //de datos del arreglo
           // ej FETCH_ASSOC retorna arreglo de datos
           // con indices asociativos
           //5. retornar resultados
           return $res;
   }
   
}
