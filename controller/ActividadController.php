<?php

require_once'config/config.php';
require_once'model/Conexion.php';
require_once'model/DAO/ActividadDAO.php';
require_once'model/DTO/Actividad.php';
require_once'model/DAO/TipoActividadDAO.php';

class ActividadController {

    private $actDAO;

    public function __construct() {
        $this->actDAO = new ActividadDAO();
    }

    public function consultar() {
        require_once HEADER;
        echo 'hola desde el controlador de actividad';
        require_once FOOTER;
    }

    public function buscar() {
        require_once HEADER;
        if (isset($_POST['b'])) {
            $resultados = $this->actDAO->consultar3($_POST['b']);
        } else {


            //OBTENER DATOS DEL MODELO
            $resultados = $this->actDAO->consultar1();
            //pasarselos a la ista
        }
        require_once 'view/actividad/ActividadView.php';
        require_once FOOTER;
    }

 
    public function mostrar() {
        //leer los tipos de actividad
        $tipoDAO = new TipoActividadDAO();
        $tipos = $tipoDAO->consultar();
        
        //cargar actividad
        if(isset($_REQUEST['id'])&&!empty($_REQUEST['id'])){
            $act=$this->actDAO->consultarxId($_REQUEST['id']);
            
        }
        
        require_once HEADER;
        REQUIRE_ONCE 'view/actividad/actividadEditarView.php';
        REQUIRE_ONCE FOOTER;
    }

    public function guardar() {
        //verificacion
        if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
            $_SESSION['mensaje'] = "Deve ingresar nombre";
            header('Localtion:index.php?c=actividad&a=mostrar');
        }
        //var_dump($_FILES["imagen"]);
        //die("");
        $rutaImg = $this->saveImage("imagen", "assets/image/");
        if($rutaImg){
            $act = new Actividad();
            $act->setAct_imagen($rutaImg);
            $act->setAct_nombre($_POST['nombre']);
            $act->setAct_descripcion($_POST['descripcion']);
            $act->setAct_precioxgrupo($_POST['precioxgrupo']);
            $act->setAct_precioxpersona($_POST['precioxpersona']);
            $act->setAct_idTipo($_POST['tipo']);

            if(isset($_REQUEST['id'])&&!empty($_REQUEST['id'])){
                $act->setAct_idActividad($_REQUEST['id']);
                $res=$this->actDAO->editar($act);
            } else {
                //llamr al model
            $res = $this->actDAO->insertar($act,$_FILES);
            }

            if ($res > 0) {
                $_SESSION['mensaje'] = "Guardado exitoso";
            } else {
                $_SESSION['mensaje'] = "no se pudo guardar";
            }
        }  else {
            header('Localtion:index.php?c=actividad&a=mostrar');
        }
        
        
        header('Location:index.php?c=actividad&a=buscar');
    }

    public function eliminar() {
        if (!isset($_GET['id'])) {
            header("index.php?c=actividad&a=buscar");
        }
        $res = $this->actDAO->eliminar($_GET['id']);
        if ($res > 0) {
            $_SESSION['mensaje'] = "Se ha eliminado";
        } else {
            $_SESSION['mensaje'] = "No se ha eliminado";
        }
        header('Location:index.php?c=actividad&a=buscar');
    }
    
    public function actxtipo(){
        
        if(!isset($_REQUEST['t'])&& empty($_REQUEST['t'])){
            $tipoDAO = new TipoActividadDAO();
            $tipos = $tipoDAO->consultar();

            require_once HEADER;
            require_once 'view/actividad/actividadViewAjax.php';
            require_once FOOTER;
        }else{//la peticion viene de ajax
            $actividades = $this->actDAO->consultarxTipo($_REQUEST['t']);
            echo json_encode($actividades);// se imprime resultados con json_encode
        }
        
    }
    
    public function saveImage($_name, $route){
        if(!isset($_FILES[$_name])){
            return false;
        }
      
        if(!$this->validateExt($_FILES[$_name]['name'])){
            return  false;
        }
        if(!file_exists( $route)){
            return  false;
        }
        opendir( $route);
        $parts = explode(".",$_FILES[$_name]['name']);
        // con el final del explode que sería la extensión de la imagen
        $origen=  $_FILES[$_name]['tmp_name'];
        $destino=  $route. time(). str_replace(end($parts),'',$_FILES[$_name]['name']). '.'.end($parts);//ends obtiene el último valor del arreglo
        move_uploaded_file($origen, $destino);
        // $_FILES[$_name]['type']; tipo de archivo
        return $destino;
    }
    
    // validar extención del archivo
    public function validateExt( $nombre){
        $patron = "%\.(gif|jpe?g|png|svg)$%i"; 
        return preg_match($patron, $nombre) ;
    }
}
