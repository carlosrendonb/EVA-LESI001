<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>EVA-LESI001</title>
	
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/estilos.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilosParticulas.css"/>     
    <link rel="stylesheet" href="assets/css/misestilos.css"/>
	<script>
        var estado=0;
               
        function mostrarMenu(){

                     
            var menu = document.getElementById("nav-responsive");
                       
            if(estado === 0){
				menu.setAttribute("style", "display:block;");
                estado=1;
            }else{
                menu.setAttribute("style", "display:none;");
                estado=0;
            }
                
        }
        
    </script>
</head>
<body>
<div id="particles-js"></div>
	<div class="encabezado">
            
                <div class="menuOculto">
                    <input type="checkbox" id="btn-menu" onchange="mostrarMenu()">
                    <label for="btn-menu"><img id="imagenMenu" src="assets/img/menuIcono.png" alt="me"></label>
                    <ul class="nav-responsive" id="nav-responsive">
                        
                            <li><a href="index.php">INICIO</a></li>
                        
                        
                            <li><a href="index.php?c=index&a=estatica&p=quienesSomos">Quienes somos?</a></li>
                                       
                        
                            <li><a href="index.php?c=index&a=estatica&p=contacto">Contactos</a></li>
                        
                         <?php
                        
                        if (isset($_SESSION['usuario'])) { 
                            $user=$_SESSION["usuario"];
                            
                            echo '<div class="alert alert-success">Bienvenido ' . $user->usu_usuario . '</div>';
                            
                            $rol = $user->usu_rol;
                            
                            if ($rol == 1) { // administrador
                                echo '<li><a href="index.php?c=index&a=estatica&p=quienesSomos">Informacion</a><li>';
                            } else if ($rol == 2) {// vendedor
                                echo '<li><a style="color: white;">Mantenimiento</a><ul><li><a  href="index.php?c=menu&a=buscar">Editar Menu</a></li>';
                                echo '<li><a  href="index.php?c=servicio&a=buscar">Editar Servicios</a></li></ul></li>';
                              
                                
                            }
                            ?>      
                            <li><a class="otrosEnlaces" href="index.php?c=usuario&a=logout">Cerrar sesión</a></li>
                            
                         <?php
                        }else{ ?>  
                            
                             <li><a class="otrosEnlaces" href="index.php?c=index&a=estatica&p=login">Ingresar</a></li>
                           
                       <?php } ?>
                          
                
                          
                
                    </ul>
                </div>
                
            <div>
                <ul class="nav">
                    
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="index.php?c=index&a=estatica&p=quienesSomos">Quienes somos?</a></li>
                    <li><a href="index.php?c=index&a=estatica&p=contacto">Contacto</a></li>
                     

                    <?php
                        
                        if (isset($_SESSION['usuario'])) { 
                            $user=$_SESSION["usuario"];
                            
                            echo '<div class="alert alert-success">Bienvenido ' . $user->usu_usuario . '</div>';
                            
                            $rol = $user->usu_rol;
                            
                            if ($rol == 1) { // administrador
                                echo '<li><a href="index.php?c=index&a=estatica&p=quienesSomos">Informacion</a><li>';
                            } else if ($rol == 2) {// vendedor
                                echo '<li><a style="color: white;">Mantenimiento</a><ul><li><a  href="index.php?c=menu&a=buscar">Editar Menu</a></li>';
                                echo '<li><a  href="index.php?c=servicio&a=buscar">Editar Servicios</a></li></ul></li>';
                              
                                
                            }
                            ?>      
                            <li><a class="otrosEnlaces" href="index.php?c=usuario&a=logout">Cerrar sesión</a></li>
                            
                         <?php
                        }else{ ?>  
                            
                             <li><a class="otrosEnlaces" href="index.php?c=index&a=estatica&p=login">Ingresar</a></li>
                           
                    <?php } ?>
                    
                </ul>
            </div>
        </div>
    </div>
    
