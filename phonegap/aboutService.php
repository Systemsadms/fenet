<?php 



//Valores recibidos 
$servicio = $_POST['servicio'];


//Conexión Servidor Remoto
$conexion=mysql_connect("localhost","root","");
$baseDeDatos=mysql_select_db("fenetco1_bd",$conexion); 

//Conexión Servidor Local
//$conexion=mysql_connect("localhost","root","");
//$baseDeDatos=mysql_select_db("fenet",$conexion); 

$ssqlId = mysql_query("SELECT * FROM listaservicios WHERE servicio='$servicio'");
        	$descripcion    =  mysql_result($ssqlId,0,"descripcion");

echo $descripcion;


mysql_close($conexion);

?>


