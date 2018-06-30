

<?php

	   		include ("../cnx.php");




            $nombre             = $_POST['nombre'];
            $descripcion        = $_POST['descripcion'];   
            $email              = $_POST['email'];          
            $telefonoLocal      = $_POST['telefono1'];     
            $telefonoCelular    = $_POST['telefono2'];    
            $whatsApp           = $_POST['whatsApp'];

            $personaContacto    = $_POST['personaContacto'];
            $cargo              = $_POST['cargo'];

            $tipodeproveedor    = $_POST['tipodeproveedor'];
            $especialidades     = $_POST['test'];  
            $pagina             =$_POST['pagina'];
            $publicidad         =$_POST['publicidad'];
            
            $pais               = $_POST['pais'];   
            $estado             = $_POST['estado']; 
            $ciudad             = $_POST['ciudad'];      
            $direccion          = $_POST['direccion'];            
                   
            date_default_timezone_set('America/La_Paz');
            $hora       = date("G:H:s");
            $fecha      = date("j-n-y");
     
            $fecha;


            if ($publicidad == "si"){
                  $asunto = "NUEVO registro de Proveedor INTERESADO EN PUBLICIDAD";
            }else{
                  $asunto = "NUEVO registro de Proveedor";
            }
            
               

              

                mysql_query ("INSERT INTO proveedores VALUES ('','$nombre','$descripcion','$email','$telefonoLocal','$telefonoCelular','$whatsApp','$personaContacto','$cargo','$tipodeproveedor','$especialidades','$pagina','$publicidad','$pais','$estado','$ciudad','$direccion','$fecha','enlistado')");

                
                mysql_close ($conexion); 




                if($publicidad = "si"){


                        $to       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject  =   $asunto;          
                        //$from     =   $_POST['from'];
                        $from     =   $email;
                        $headers  =   "From:" . $from;
                        //$message  =   $_POST['mensaje'];
                        $message  =  "Se ha Enlistado el proveedor:"

                        .$nombre. " " .

                        "//Descripcion:"." ".

                        $descripcion. " ".

                        "//Tipo de Proveedor:"." ".

                        $tipodeproveedor. " ".

                        "//Especialidades:"." ".

                        $especialidades. " ".

                        "//Tiene Pagina Web:"." ".

                        $pagina. " ".

                        "//Esta Interesado en el servicio de marketing:"." ".

                        $publicidad. " ".

                        "//Email:"." ".

                        $email. " ".

                        "//telefono1:"." ".

                        $telefonoLocal. " ".

                        "//telefono2:"." ".

                        $telefonoCelular. " ".
                      

                        "//personaContacto:"." ".

                        $personaContacto." ".

                        "//cargo:"." ".

                        $cargo. " ".

                        "//whatsApp:"." ".

                        $whatsApp. " ".


                        "//Direccion de la empresa:". " ".

                        $direccion.".".$ciudad.".".$estado.".".$pais
                        ;                       
                                
                        mail($to,$subject,$message,$headers); 

                        echo "<h3 style='text-align:center;'>SE HA REGISTRADO UN NUEVO PROVEEDOR DE SERVICIOS<h3>";


                        echo "<p style='text-align:center;'><a style='width:200px; background-color:red; color:white;' href='index.php'>REGISTRAR OTRO PROVEEDOR</a></p>";

                        }




          

?>
 
 <script type="text/javascript">
                         // window.location="okProveedor.php";
                    </script>