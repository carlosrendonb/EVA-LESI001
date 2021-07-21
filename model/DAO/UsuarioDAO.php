<?php

class UsuarioDAO {
   private $conexion;
   public $userName;
   public $userPass;
   public $userRol;
   public $userId;

   public function __construct() {
       $this->conexion= 
               Conexion::getConexion();
   }
    
   public function consultar(){
       try{
           //1. sentencia preparada
           $sen= $this->conexion->prepare(
                   "select * from usuario where usu_estado=1 and usu_usuario=? and usu_clave=?");
           //2. declarar los parametros para 
           // la sentnecia
           $par = [$this->userName,$this->userPass];
           //3. ejecutar la sentencia
           $sen->execute($par);
           //4. obtener resultados 
           $res= $sen->fetch(PDO::FETCH_OBJ);
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
   
   public function insertar(){
       //sentencia de insercion				
    $sql="insert into usuario "
                    . "(username, userpass, userrol) values(?,?,?)";
      try{
        //1. sentencia preparada
      $sen = $this->conexion->prepare($sql);
      //2. parametros de la sentencia
      $par = array($this->userName,$this->userPass,$this->userRol);
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
   
   public function editar(){
       //sentencia de actualizacion
    $sql= "update  usuario "
                    . "set usu_usuario=?, usu_clave=?, usurol=? "
                    . "where userid=?"	;				
        //1. sentencia preparada
        $se= $this->conexion->prepare($sql);
        //2. parametros de la sentenca
      $par = array($this->userName,$this->userPass,$this->userRol,$this->userId);
        
       //3. ejecutar la sentencia
        $se->execute($par);
        //4. obtener resultados
        $res=$se->rowCount();
        //5. retornar resultados
        return $res;
   }


   public function eliminar($id){
       //sentencia de eliminacion logica			
    $sql = "update  usuario set usu_estado=0 where userid=?";
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
  
   
}
