<?php 



//Valores recibidos 
$usuario = $_POST['usuario'];
$pass 	 = $_POST['pass'];


//$servicio = $_POST['direccion'];
$servicio = $_POST['servicio'];
$tipodeServicio = "general";
$descripcion = $_POST['descripcion'];
$direccionServ = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$fecha = $_POST['fecha'];
$hora = "no aplica";
$idProveedor = "fenet";
$estatus = "solicitado";


//Conexión Servidor Remoto
$conexion=mysql_connect("localhost","root","");
$baseDeDatos=mysql_select_db("fenetco1_bd",$conexion); 


//Conexión Servidor Local
//$conexion=mysql_connect("localhost","root","");
//$baseDeDatos=mysql_select_db("fenet",$conexion); 




$ssql = "SELECT * FROM usuario WHERE email='$usuario' and pass='$pass'";
    $rs = mysql_query($ssql,$conexion);
    if (mysql_num_rows($rs)==1)
        { 
        	

         	$ssqlId = mysql_query("SELECT * FROM usuario WHERE email='$usuario'");
        	$idcliente    =  mysql_result($ssqlId,0,"id");


        	mysql_query ("INSERT INTO servicio VALUES ('','$servicio','$tipodeServicio','$descripcion','$direccionServ','$ciudad','$estado','$pais','$fecha','$hora','$idProveedor','$idcliente','$estatus')");



             $ssql = mysql_query("SELECT * FROM usuario WHERE email='$usuario'");
                                      $tipoUsuario = mysql_result($ssql,0,"tipoUsuario");
                                      $nombre   = mysql_result($ssql,0,"nombre");
                                      $apellido = mysql_result($ssql,0,"apellido");
                                      $telefono = mysql_result($ssql,0,"telefono");



            $to       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject  =   "Solicitud de Servicio";          
                        //$from     =   $_POST['from'];
                        $from     =   $usuario;
                        $headers  =   "From:" . $from;
                        //$message  =   $_POST['mensaje'];
                        $message  =  "Nueva Solicitud de Servicio para el Usuario:"

                        .$nombre. " ".$apellido .

                        "//Tipo de Usuario:"." ".

                        $tipoUsuario. " ".

                        "//Email:"." ".

                        $usuario. " ".

                        "//Telefono:"." ".

                        $telefono. " ".

                        "//Servicio:"." ".

                        $servicio. " ".

                        "//Tipo de Servicio:"." ".

                        $tipodeServicio." ".

                        "//Descripcion:"." ".

                        $descripcion. " ".

                        "//Fecha:"." ".

                        $fecha. " ".

                        "//Hora:"." ".

                        $hora. " ".

                        "//PROVEEDOR SELECCIONADO:"." ".

                        $idProveedor. " ".

                        "//Direccion:". " ".

                        $direccionServ.".".$ciudad.".".$estado.".".$pais
                        ;                       
                                
                        mail($to,$subject,$message,$headers); 



        	echo "enviado";

			
		}else{

			echo "usurioIncorrecto";
		}


//Cierro
mysql_close($conexion);







?>