<?php

  session_start();
  if ($_SESSION['login'])
    {
      include ("cnx.php");          
?>
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
      min-height: 533px;
      background-color: white; 
      margin: 0 auto; 
      border-right: 3px solid black;
      border-left:3px solid black;
    }


    .asesor{
      width: 382px; 
      height: 60px; 
      margin: 0 auto; 
      background-color: green; 
      border-bottom-right-radius: 25px; 
      border-bottom-left-radius: 25px; 
      border-right:3px solid black;
      border-left:3px solid black;
      border-bottom: 3px solid black;
      font-size: 20px; 
      color: white; 
      padding-top: 15px; 
      text-align: center; 
      cursor: pointer;}

    .asesor:hover{background-color:#006837; }

    .btn_aceptar{
        height: 30px;
        width: 250px;
        background-color: #00A1B5;
        margin: 0 auto;
        text-align: center;
        color: white;
    }

    @media (max-width:800px){

    header{width: 100%;}

    section{width: 100%;}

    .asesor{width: 100%;}
    </style>

    <title>Fe at Network!</title>
  </head>
<body style=" background-color: #003e63;">



<header>
<?php
    include ("menu.php");
?>
</header>


<section>



  <div style="padding-top: 50px;"></div>
    <div style="width: 250px; height: 45px; background-color: #009245; margin: 0px auto; margin-bottom: 43px; color: white; font-size: 18px; text-align: center;padding-top: 10px;"><b>Solicitud Completa</b></div>



    <div class="container">
     <p>La solicitud de Servicio ha sido completada con éxito.</p>
    </div>

    <div class="container">
     <p>En breve un Asesor de servicios se pondrá en conacto con usted.</p>
    </div>

    <div class="container">
     <p>En caso de algún inconveniente puede contactar a nuestros Asesores en el boton Conctactar Asesor. Estamos listos para atenderle.</p>
    </div>

<br>
<br>






<?php

  $ssql = "SELECT * FROM proveedor WHERE  email='$email' ";
          $rs = mysql_query($ssql,$conexion);     
          if (mysql_num_rows($rs)>0)
          {
            ?>
               <a href="inicioProveedor.php"><!-- container box --><div class="btn_aceptar"><!-- content --><p>ACEPTAR</p></div></a>
            <?php
          }
          else if (mysql_num_rows($rs)==0)
          {
            ?>
               <a href="inicio.php"><!-- container box --><div class="btn_aceptar"><!-- content --><p>ACEPTAR</p></div></a>
            <?php
          }
          else
          {
            ?>
               <a href="inicio.html"><!-- container box --><div class="btn_aceptar"><!-- content --><p>ACEPTAR</p></div></a>
            <?php
          }
          
?>




















<?php
        $email           = $_SESSION['login'];
        $servicio        = $_POST['servicio'];
        $descripcion     = $_POST['descripcion'];
        $direccionServ   = $_POST['direccionServ'];
        $hora            = $_POST['hora'];
        $fecha           = $_POST['fecha'];
        $pais            = $_POST['pais'];
        $estado          = $_POST['estado'];
        $ciudad          = $_POST['ciudad'];
        $tipodeServicio  = $_POST['tipodeServicio'];
        $estatus        = "solicitado";

      $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
      $tipoUsuario = mysql_result($ssql,0,"tipoUsuario");
      $nombre   = mysql_result($ssql,0,"nombre");
      $apellido = mysql_result($ssql,0,"apellido");
      $telefono = mysql_result($ssql,0,"telefono");
      $idcliente    =  mysql_result($ssql,0,"id");



                                


    
                              $ssqlId = mysql_query("SELECT * FROM usuario WHERE email='$email'");
                              $idcliente    =  mysql_result($ssqlId,0,"id");  

                              mysql_query ("INSERT INTO servicio VALUES ('','$servicio','$tipodeServicio','$descripcion','$direccionServ','$ciudad','$estado','$pais','$fecha','$hora','fenet','$idcliente','$estatus')");

            
                              mysql_close ($conexion); 
  ?>












































<?php

/*


$ssql = "SELECT * FROM proveedor WHERE  pais='$pais' and estado='$estado'  ";
          $rs = mysql_query($ssql,$conexion);     
          if (mysql_num_rows($rs)>0)
          {

            $ssql2 = "SELECT * FROM proveedor WHERE  tipodeproveedor='$servicio' and (especialidad1='$tipodeServicio' or especialidad2='$tipodeServicio' or especialidad3='$tipodeServicio') ";
            $rs2 = mysql_query($ssql2,$conexion);     
              if (mysql_num_rows($rs2)>0)
          {


              $reg = mysql_fetch_array($rs2,MYSQL_BOTH);              
              while ($reg)
              {

                      echo "<table border='0' bordercolor='blue' align='center' width='100%'>";
                      echo "<tr>";
                      echo "<td align='center' bgcolor='blue' style='height:2px;'><font color='black'></font></td>";
                      echo "<td align='center' bgcolor='blue'style='height:2px;'><font color='black'></td>";
                     // echo "<td align='center' bgcolor='#58ACFA'><b><font color='black'></b></td>";
                      echo "</tr>";
                      

                      echo "<tr>";


                      //echo "<td align='center' class='dark'>".$reg[0]."</td>";
                      echo "<td align='right' bgcolor='' class='dark'><img src='img/home.jpg' width='40px' height='40px'></td>";
                      
                      echo "<td class='dark' align='left' style='border: inset 0pt;'>        
                        <form action='login.php' method='post'>      
                          <input type='hidden' name='id'          value=".$reg[5].">
                          <input type='hidden' name='servicio'    value='$servicio'>
                          <input type='hidden' name='descripcion' value='$descripcion'>
                          <input type='hidden' name='direccionServ'   value='$direccionServ'>
                          <input type='hidden' name='fecha'       value='$fecha'>
                          <input type='hidden' name='hora'        value='$hora'>
                          <input type='hidden' name='pais'        value='$pais'>
                          <input type='hidden' name='estado'        value='$estado'>
                          <input type='hidden' name='ciudad'        value='$ciudad'>
                          <input type='hidden' name='tipodeServicio'        value='$tipodeServicio'>
                          <input type='submit' style='width:295px; height:50px; cursor:pointer;' name='imageField' value='".$reg[1]."' />
                         
                        </form>       
                      </td>";//FIN DEL echo

                      //echo "<td align='center' class='dark'>".$reg[13]."</td>";
                      


              $reg = mysql_fetch_array($rs2,MYSQL_BOTH);
              echo "</tr>";
              }
              echo "</table>";
              mysql_close($conexion);
          }
          else
          {
            ?>
                <div style="width: 80%; margin: 0 auto; text-align: center;">No se encontraron proveedores registrados para este servicio en la direccion indicada, De inmediato <b>Nuestros Asesores buscaran un proveedor de servicios</b> y se contactaran con usted</div>
            <?php
            




 */ 
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


/*

          }

        }




if($tipoUsuario == "proveedor")
      {
        ?>
          <a href="inicioProveedor.php"><div style="margin: 0 auto; width: 100px; height: 30px; color:white; background-color: green; text-align: center; margin-top: 50px">Aceptar</div></a>
        <?php
      }

      else if($tipoUsuario == "cliente")
      {
        ?>
          <a href="inicio.php"><div style="margin: 0 auto; width: 100px; height: 30px; color:white; background-color: green; text-align: center; margin-top: 50px">Aceptar</div></a>
        <?php
      }


*/
?>



</section>
    

<a href="asesor.php"><div class="asesor">Contactar Asesor</div></a>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{
  header("location:index.php");
}
?>