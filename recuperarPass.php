<!DOCTYPE html>
<html>
<head>
  <title>Fe en la Red</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/mediastyleMenu.css">
</head>
<body>

<div style="width: 100%; height: 80px; background-color: none;">
<nav>
 <a href="index.php"> <div id="logo"><img src="img/logo3.png" height="70px;"></div></a>

  
    <ul id="opciones">
      <li id="item"><a href="#conocenos" style="color: #003e63">Conocenos</a></li>
      <li id="item"><a href="#proveedor" style="color: #003e63">Proveedores</a></li>
      <li id="item"><a href="#escribenos" style="color: #003e63">Contactanos</a></li>
      <li id="item"><a href="#conocenos" style="color: #003e63">Crear Cuenta</a></li>
      <a href="app/index.php"><li id="item" class="iniciarSeccion">Iniciar Seccion</li></a>
    </ul>

  <a href="#"><div id="iconSmart" id="iconSmart"><img src="img/menu.png" height="35px;"></div></a>
</nav>
</div>



<div id="menuSmart">
  
  <a href="#conocenos2"><div>Conocenos</div></a>
  <hr>
  <a href="#proveedor"><div>Proveedor</div></a>
  <hr>
  <a href="#escribenos"><div>Contactanos</div></a>
  <hr>
  <a href="#conocenos2"><div>Crear Cuenta</div></a>
  <hr>
  <a href="app/index.php"><a href="#"><div>Iniciar Seccion</div></a></a>
  <hr>
</div>




<div class="recuperar-cuenta">

<?php
    if (isset($_POST['recuperar'])){


      include ("app/cnx.php");
      $email = $_POST['email'];
      $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");

      if (mysql_num_rows($ssql)>0){
      $pass = mysql_result($ssql,0,"pass");

        ?>
           <div style="height: 100px; width: 100%; text-align: center; background-color: #1ca462; color: white; padding-top:25px; "><h3>"Recuperación Exitosa"</h3></div>

                     <div style="width: auto; height: auto; background-color: none; margin: 0 auto; padding-top: 50px; text-align: center;">

                        <h4>Contraseña Reenviada</h4>
                          <br><br>
                          <div style="width: 100%; text-align: center; margin-bottom: 50px;">Se ha enviado un email a la direccion de correo registrada con los datos de acceso a su cuenta. En caso de no encontrar el email mencionado por favor revise su bandeja de correos no deseados o badeja spam. </div> <br><br>                                                
                     </div>
        <?php




          $body2 = 'Saludos Cordiales:
              
                Sus datos de acceso para ingresar a su cuenta FENET son los siguientes:
                
                    Usuario:  '.$email.'
                    Password: '.$pass.'
                  
                 Usted puede cambiar su clave cuando guste desde su cuenta FENET en la seccion Perfil en el menu de opciones.       
                
          
                  Si en algun momento usted tiene alguna duda o necesita de apoyo tecnico personalizado puede contactar nuestros Asesores en la opcion Contactar Asesor. Nuestros especialistas estan listos para atenderles 24/7.
                    
                    Si usted no solicito la recuperacion de los datos por favor informenos al email info@fenet.com.ve.
                    
                      ';


              $para2= $email;
              $asunto2  = "Recuperacion de Cuenta FENET";              
              $mensaje2   = $body2;
              $cabeceras2 = "From: " . "info@fenet.com.ve" . "\r\n";

              mail ($para2, $asunto2, $mensaje2, $cabeceras2);





      }
      else{
         ?>

                  <div class="container-fluid">

                    <h2 style="text-align: center; margin-top: 100px;">Recupera tu cuenta</h2>
                    <div class="row">
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4" style="background-color: none; height: auto; text-align: none; margin-top: 50px; margin-bottom: 100px; text-align: center;">
                        
                        <form method="post" action="#">
                          <label>Coloca la direccion de correo electronico registrada.</label><br><br>
                          <input type="email" name="email" placeholder="tu@correo.com">
                          <p><font color="red">El correo ingresado no se encuentra registrado.</font></p>
                          <br><br>
                          <input class="inputEnviar" type="submit" name="recuperar" value="Recuperar Contraseña" style="height: 30px; ">
                        </form>

                        <br><br>

                      <div class="col-lg-4"></div>
                    </div>
                  </div>
                  </div>

        <?php
      }
      




      
    }
    else
    {
        ?>

                  <div class="container-fluid">

                    <h2 style="text-align: center;">Recupera tu cuenta</h2>
                    <div class="row">
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4" style="background-color: none; height: auto; text-align: none; margin-top: 50px; margin-bottom: 100px; text-align: center;">
                        
                        <form method="post" action="#">
                          <label>Coloca la direccion de correo electronico registrada.</label><br><br>
                          <input type="email" name="email" placeholder="tu@correo.com">
                          <br><br>
                          <input class="inputEnviar" type="submit" name="recuperar" value="Recuperar Contraseña" style="height: 30px; ">
                        </form>

                        <br><br>

                      <div class="col-lg-4"></div>
                    </div>
                  </div>
                  </div>

        <?php
    }


?>


</div>





<div id="contacto">
  <div class="contactanos">
    <font class="tipo-letra-dies"><b>CONTÁCTANOS</b></font>
    <p class="tipo-letra-once">Si tienes alguna duda o quieres contactar con nuestro equipo no dudes en enviarnos un mensaje, te atenderemos de inmediato</p>



    <div class="redes-sociales">
      <div class="numeros">
        <font>
          Email: info@fenet.com.ve
          <br>
          Telefono: +58 416 606 6328
          <br>
          WhatsApp: +58 416 606 6328
        </font>
      </div>
      <div class="redes">
        <font><b>Siguenos:</b></font>
        <br>
        <a href="https://www.instagram.com/appfenet/" target="_blank"><div class="social"><img class="icono-social" src="img/ionos/instagram.png"></div></a>
        <a href="https://www.facebook.com/fenetSocial/" target="_blank"><div class="social"><img class="icono-social" src="img/ionos/facebook.png"></div></a>
        <a href="https://twitter.com/appfenet" target="_blank"><div class="social"><img class="icono-social" src="img/ionos/twitter.png"></div></a>
        <!--<a href="https://www.facebook.com/fenetSocial/" target="_blank"><div class="social"><img class="icono-social" src="img/ionos/linkedin.png"></div>-->
      </div>
    </div>
    <br>  

<!--
    
-->

















  </div>
  <div class="escribenos" style="display: block;" id="escribenos">
    <font class="tipo-letra-nueve"><b>Escríbenos tus dudas</b></font>
    <br>
    <sapm id="spamMensaje" style="color: red;"></sapm>
    <form>
      <input class="input-dos" type="text" name="" placeholder="Nombre y Apellido" id="nombreApellido">
      <br>
      <input class="input-dos" type="text" name="" placeholder="Telefono" id="mensajeTelefono">
      <br>
      <input class="input-dos" type="text" name="" placeholder="Correo Electronico" id="emailForm">
      <br>
      <textarea class="textarea-dos" name="mensaje" style ="color: white;" placeholder="Descripcion del mensaje" id="mensaje"></textarea>
      <br>
      <input class="input-enviar-dos" type="button" name="registrar" value="Enviar" id="enviarMensaje"/>
    </form>
  </div>


  <div class="escribenos" id="mensajeEnviado" style="display: none; color: white;" id="none"> 
    Su mensaje a sido Enviado con Exito. en breve nuestros asesores se pondran en contacto con usted...
    <br><br>
    <input class="inputEnviar" type="button"  value="Aceptar" id="enviarOtroMensaje"/>
  </div>  

</div>





<footer><b>Systems Admins C.A Todos los Derechos Registrados</b></footer>






<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script>

</body>
</html>