<?php 






//Valores recibidos 
$nombre = $_POST['nombre'];
$apellido 	 = $_POST['apellido'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$direccion = "";
$ciudad="";



//Conexión Servidor Remoto
$conexion=mysql_connect("localhost","fenetcom_admin","hdwtnkue456");
$baseDeDatos=mysql_select_db("fenetcom_fenet",$conexion); 


//Conexión Servidor Local
//$conexion=mysql_connect("localhost","root","");
//$baseDeDatos=mysql_select_db("fenet",$conexion); 




$ssql = "SELECT * FROM usuario WHERE email='$correo'";
    $rs = mysql_query($ssql,$conexion);
    if (mysql_num_rows($rs)>0)
        { 
        	

        	echo "usuarioRegistrado";

			
		}else{

              mysql_query ("INSERT INTO usuario VALUES ('','$nombre','$apellido','$correo','$pass','$telefono','$direccion','cliente','$pais','$estado','$ciudad')");

          



//NOTIFICACION POR CORREO REGISTRO DE USUARIO 


 $to3       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject3  =   "Nuevo Registro de Usuario";          
                        //$from     =   $_POST['from'];
                        $from3     =   $correo;
                        $headers3  =   "From:" . $from3;
                        //$message  =   $_POST['mensaje'];
                        $message3  =  "Se ha Registrado el usuario:"

                        .$nombre. " " .$apellido." ".

                        "//Telefono:"." ".

                        $telefono." ".

                        "//Email:"." ".

                        $correo. " ".

                        "//Direccion:". " ".

                        $estado.".".$pais
                        ;    


 mail($to3,$subject3,$message3,$headers3); 


//NOTIFICACION POR CORREO REGISTRO DE USUARIO AL CLIENTE

  $body2 = 'Saludos Cordiales:
              
                Sr(a). '.$nombre.', es un gusto para nosotros que usted forme parte de nuestra red de usuarios. Sus datos de acceso son los siguientes:
                
                    Usuario:  '.$correo.'
                    Llave: '.$pass.'
                  
                 Usted puede cambiar su clave cuando guste desde su cuenta FENET en la seccion Perfil en el menu de opciones desde nuestro sitio web www.fenet.com.ve       
                
                 Solicitar un servicio es muy Facil, puede hacerlo en cinco pasos ingresando en el sitio web www.fenet.com.ve o descargando la Aplicacion para su Smartphone:
                 
                  
                  Paso 1. Ingrese Con su cuenta de Usuario
                  Paso 2. Seleccione el Servicio
                  Paso 3. Describa el servicio 
                  Paso 4. Indique la direccion, fecha y hora del servicio
                  Paso 5. Valide los datos de su cuenta

                  
                  Si en algun momento usted tiene alguna duda o necesita de apoyo tecnico personalizado puede contactar nuestros Asesores en la opcion Contactar Asesor. Nuestros especialistas estan listos para atenderles 24/7.
                    
                    Agradecemos por su interes en utilizar nuestra plataforma, esperamos brindarles un excelente servicio.
                    
                      ';


              $para2 = $correo;
              $asunto2  = "Bienvenido a FENET";
              $desde2   = $correo;
              $mensaje2   = $body2;
              $cabeceras2 = "";
              $cabeceras2 = "MIME-VErsion: 1.0 \r\n";
              $cabeceras2 = "Content-Type: text/html; charset=iso-8859-1\r\n";
              $cabeceras2 = "To: " . $correo . "\r\n";
              $cabeceras2 = "From: " . "info@fenet.com.ve" . "\r\n";    



mail ($para2, $asunto2, $mensaje2, $cabeceras2);


}


//Cierro
mysql_close($conexion);


?>