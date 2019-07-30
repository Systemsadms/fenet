<?php 



//Valores recibidos 
$usuario = $_POST['direccion'];


//Conexión Servidor Local
mysql_connect("localhost", "root", "") or
    die("No se pudo conectar: " . mysql_error());
mysql_select_db("fenetco1_bd");

$resultado = mysql_query("SELECT servicio FROM listaservicios");

while ($fila = mysql_fetch_array($resultado, MYSQL_BOTH)) {
	$servicios = ($fila["servicio"].",");
    printf ($servicios);
}

mysql_free_result($resultado);





?>


