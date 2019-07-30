<?php 






//Valores recibidos 
$nombre = $_POST['nombreApellido'];
$correo 	= $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];








//NOTIFICACION POR CORREO REGISTRO DE USUARIO 


 $to3       =   "appfenet@gmail.com";
                        //$subject  =   $_POST['asunto'];
                        $subject3  =   "Nuevo Mensaje www.fenet.com.ve";          
                        //$from     =   $_POST['from'];
                        $from3     =   $correo;
                        $headers3  =   "From:" . $from3;
                        //$message  =   $_POST['mensaje'];
                        $message3  =  "Se ha enviaod un mensaje desde el sitio web:"

                        .$nombre. " " .

                        "//Telefono:"." ".

                        $telefono." ".

                        "//Email:"." ".

                        $correo. " ".

                        "//Mensaje:". " ".

                        $mensaje
                        ;    


 mail($to3,$subject3,$message3,$headers3); 





echo "mensajeEnviado";


?>