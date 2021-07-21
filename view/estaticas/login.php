
<!--<body onload="window.scrollTo(0, 400);">-->
<br>

<div class="title-cards" style="padding:20px 0px 0px;">
<h1>
		<a class="logo" style="color:#138496;">
            <i class="btn-link2 fas fa-biohazard">LESI</i>
        </a> 
	</h1></div>

<div class="contenedorPrincipalFormulario">
    <div class="row">
        <div class=" col-md-4"></div>
        <div class=" col-sm-12 col-md-4">
       
       <div class="row">
           <div class="col-md-2"></div>
           
        <div class="contenedorFormulario col-md-11 card" style="box-shadow: 10px 10px 68px -31px rgba(0,0,0,0.75);border-radius: 10px; padding: 20px 40px;">
            <h1>Login</h1>
            <form action="index.php?c=Usuario&a=login" method="POST" name="formLogin">


                <div class="form-group">
                    <input class="form-control" placeholder="Usuario" type="text" name="user" required=""/>
                </div>

                <div class="form-group">
                    <input class="form-control" placeholder="Clave" type="password" name="pass" id="contraseña" required="">
                </div> 

                <div>   
                    <input type="checkbox" name="suscripcion" id="mostrar" onchange="mostrarContrasena()"/>Mostrar contraseña                            
                </div>
                <br>
                <div class="form-group">
                    <input type="submit"  value="Ingresar" class="btn btn-primary">
                </div>

                <div class="form-group">
                    Aún no eres miembro,
                <a href="" class="to_register">Regístrate</a>                            
                </div>
            </form>
        </div>
       </div>
   </div>
</div>

<?php
// put your code here
if (isset($_SESSION['mensaje'])) {
    // leer variable de la sesion
    $mensaje = $_SESSION['mensaje'];
    echo $mensaje;
    // eliminar varibale de la session
    session_unset($mensaje);
}
?>
       
</div>
</body>


<script>
function mostrarContrasena(){
            var tipo = document.getElementById("contraseña");
            if(tipo.type === "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
            }
</script>
<br>
