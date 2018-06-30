

<?php

	   		include ("../cnx.php");




            $nombre             = $_POST['nombre'];
            $descripcion        = $_POST['descripcion'];   
            
                     

              

                mysql_query ("INSERT INTO listaservicios VALUES ('','$nombre','$descripcion')");

                
                mysql_close ($conexion); 




                        echo "<h3 style='text-align:center;'>SE HA REGISTRADO UN NUEVO SERVICIO A LA LISTA<h3>";


                        echo "<p style='text-align:center;'><a style='width:200px; background-color:red; color:white;' href='index.php'>REGISTRAR OTRO SERVICIO</a></p>";

                        




          

?>
 
 <script type="text/javascript">
                         // window.location="okProveedor.php";
                    </script>