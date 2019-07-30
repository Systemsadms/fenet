<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">

    <style>
    header{
      width: 382px; height:auto; 
      background-color: white; 
      margin: 0 auto; 
      border-top-right-radius:30px;
      border-top-left-radius:30px;  
      border-top:3px solid black; 
      border-right:3px solid black; 
      border-left:3px solid black;}

    section{
      width: 382px; 
      height:auto; background-color: 
      white; margin: 0 auto; 
      border-bottom-left-radius:30px;
      border-bottom-right-radius:30px; 
      border-right:3px solid black;
      border-left:3px solid black;
      border-bottom: 3px solid black;}

    @media (max-width:800px){

    header{width: 100%;}

    section{width: 100%;}

    } 
    </style>

    <title>Fe at Network!</title>
  </head>
<body style=" background-color: #003e63;">



<header>


  <nav class="navbar navbar-dark bg-dark" style="border-top-right-radius:25px; border-top-left-radius: 25px;">
    <a class="navbar-brand" href="../index.php">
      <img src="img/fenetalone.png" width="100" height="40" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro1.php">Crear Cuenta</a>
      </li>
    </ul>
  </div>
</nav>
</header>




<section>

  <div style="text-align: center; padding-top: 30px;">
    <p>Ingrese su Usuario</p>
    <img src="img/user.png">




<?php


if (isset ($_POST['login'])){


 $nick      =   $_POST['user'];
 $pass      = $_POST['llave'];

   require("cnx.php");
              
             
              //if($tipoCuenta == "Cliente")
            //{ 
                      $ssql = "SELECT * FROM usuario WHERE email='$nick' and pass='$pass'";
                      $rs = mysql_query($ssql,$conexion);
                          if (mysql_num_rows($rs)==1)
                          {
                            session_start();
                            $_SESSION["login"] = $nick;    
                           


                                   

                              $ssql = mysql_query("SELECT * FROM usuario WHERE email='$nick'");  
                              $idcliente    =  mysql_result($ssql,0,"id");
                              $tipoUsuario    =  mysql_result($ssql,0,"tipoUsuario");










                                $servicio    = $_POST['servicio'];

                                $descripcion    = $_POST['descripcion'];

                                $tipodeServicio    = $_POST['tipodeServicio'];

                                $pais    = $_POST['pais'];

                                $ciudad    = $_POST['ciudad'];

                                $estado    = $_POST['estado'];

                                $direccionServ    = $_POST['direccionServ'];

                                $fecha    = $_POST['fecha'];

                                $hora    = $_POST['hora'];


                              mysql_query ("INSERT INTO servicio VALUES ('','$servicio','$tipodeServicio','$descripcion','$direccionServ','$ciudad','$estado','$pais','$fecha','$hora','fenet','$idcliente','solicitado')");

                              mysql_close ($conexion); 









                              $to       =   "appfenet@gmail.com";
                              //$subject  =   $_POST['asunto'];
                              $subject  =   "NUEVA SOLICITUD DE SERVICIO";          
                              //$from     =   $_POST['from'];
                              $from     =   $email;
                              $headers  =   "From:" . $from;
                              //$message  =   $_POST['mensaje'];
                              $message  =  "Nueva solicitud de servicios: "

                              . $servicio.

                              "//Tipo de Servicio:"

                              . $tipodeServicio.

                              "//Descripcion:"

                              . $descripcion.

                              "//Pais:"

                              . $pais.

                              "//Estado:"

                              . $estado.

                              "//Ciudad:"

                              . $ciudad.

                              "//Direccion:"

                              . $direccionServ.

                              "//Fecha:"

                              . $fecha.

                              "//Hora:"

                              . $hora.

                              "//Para el Usuario:"

                              . $nombre." ".$apellido.

                              "//telefono:"

                              . $telefono.

                              "//Email:"

                              . $email

                              ;                       
                                      
                              mail($to,$subject,$message,$headers); 

















                            
                              if($tipoUsuario == "cliente")
                              {
                                    ?>
                                      <script type="text/javascript">                             
                                      window.location="proveedoresIndex.php";
                                    </script>
                                    <?php 
                                    }
                                    else if($tipoUsuario == "proveedor"){
                                      ?>
                                      <script type="text/javascript">                             
                                      window.location="proveedoresIndex.php";
                                    </script>
                                    <?php 
                                    }
                                    else if($tipoUsuario == "asesor"){
                                      ?>
                                      <script type="text/javascript">                             
                                      window.location="proveedoresIndex.php";
                                    </script>
                                    <?php 
                                    }

                       mysql_close($conexion); 


                         }
                          
                          else
                          {

                              echo "<font color='red'><b>Usuario o Clave inorrectos</b></font>";           
                            mysql_close($conexion);
                          }
                          }
?>


<form action="" method="post">

<br><br>
<label style="color: gray; ">Correo Electronico</label><br>
<input  type="text" spellcheck="false" name="user" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<br>
<label style="color: gray;">Llave</label><br>
<input  type="password"  id="llave" name="llave" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

     <input type="hidden" name="servicio" value="<?php echo $servicio    = $_POST['servicio'];  ?>">

     <input type="hidden" name="descripcion" value="<?php echo $descripcion    = $_POST['descripcion'];  ?>">

     <input type="hidden" name="tipodeServicio" value="<?php echo $tipodeServicio    = $_POST['tipodeServicio'];  ?>">

     <input type="hidden" name="pais" value="<?php echo $pais    = $_POST['pais']; ?>">

     <input type="hidden" name="ciudad" value="<?php echo $ciudad    = $_POST['ciudad']; ?>">

     <input type="hidden" name="direccionServ" value="<?php echo $direccionServ    = $_POST['direccionServ']; ?>">

     <input type="hidden" name="fecha" value="<?php echo $fecha    = $_POST['fecha']; ?>">

     <input type="hidden" name="hora" value="<?php echo $hora    = $_POST['hora']; ?>">

     <input type="hidden" name="estado" value="<?php echo $estado    = $_POST['estado']; ?>">


<br>
    <input type="submit" name="login" value="Ingresar" style="
      background-color: #c4c4c4;
      width: 250px;
      height: 30px;
      border: #f2f2f2 solid 1px;
      margin-top: 30px;
      cursor: pointer;
    ">

</form>






  
    <p style="margin-top: 50px;">Si aun no tiene cuenta
      <form method="post" action="registro1.php" style="margin-bottom: 40px;">


             <input type="hidden" name="servicio" value="<?php echo $servicio    = $_POST['servicio'];  ?>">

             <input type="hidden" name="descripcion" value="<?php echo $descripcion    = $_POST['descripcion'];  ?>">

             <input type="hidden" name="tipodeServicio" value="<?php echo $tipodeServicio    = $_POST['tipodeServicio'];  ?>">

             <input type="hidden" name="pais" value="<?php echo $pais    = $_POST['pais']; ?>">

             <input type="hidden" name="ciudad" value="<?php echo $ciudad    = $_POST['ciudad']; ?>">

             <input type="hidden" name="direccionServ" value="<?php echo $direccionServ    = $_POST['direccionServ']; ?>">

             <input type="hidden" name="fecha" value="<?php echo $fecha    = $_POST['fecha']; ?>">

             <input type="hidden" name="hora" value="<?php echo $hora    = $_POST['hora']; ?>">

             <input type="hidden" name="estado" value="<?php echo $estado    = $_POST['estado']; ?>">



          <input type="submit" value="Regístrese Aquí" name="registro" style="color:white; background-color: red; width: 250px; border-radius: 5px; cursor: pointer;">
      </form>
    </a></p>

    <a href="../recuperarPass.php">"Olvide mi Contraseña"</a>



  </div>


</section>
    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>