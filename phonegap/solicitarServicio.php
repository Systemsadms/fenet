<?php




$servicio = $_POST['servicio'];
$nombreApellido = $_POST['nombreApellido'];
$telefono = $_POST['telefono'];



 $to       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject  =   "Solicitud de Servicio";          
                        //$from     =   $_POST['from'];
                        $from     =   "info@fenet.com.ve";
                        $headers  =   "From:" . $from;
                        //$message  =   $_POST['mensaje'];
                        $message  =  "Nueva Solicitud de Servicio NO ENLISTADO:"

                        .$nombreApellido. " ".

                        "//Servicio:"." ".

                        $servicio. " ".

                        "//Telefono:"." ".

                        $telefono
                        ;                       
                                
                        mail($to,$subject,$message,$headers); 



        	echo "enviado";


?>