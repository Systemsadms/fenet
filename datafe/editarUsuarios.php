<?php

  session_start();
  if ($_SESSION['login'])
    {

    	require('model/cnx2.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inteligencia de Mercado</title>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8"/>


	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>




</head>
<body>



<header>
	<img src="images/logo.png">

</header>


<?php
include("menu.php");
 ?>


<div class="breadcrumb">Inicio /  <b>Usuarios</b></div>



<?php
$idContacto= $_POST['idContacto'];
?>





<?php
//-----------------------EDITAR de Contacto-------------------------//


if(isset($_POST['guardarContacto'])){


 $nombre =$_POST['nombre'];
 $apellido =$_POST['apellido'];
 $email =$_POST['email'];
 $pass =$_POST['pass'];
 $telefono =$_POST['telefono'];
 $tipoUsuario =$_POST['tipoUsuario'];
 $pais = $_POST['pais'];
 $estado = $_POST['estado'];
 $ciudad =$_POST['ciudad'];
 $direccion =$_POST['direccion'];




include ("model/cnx2.php");

$consulta="UPDATE usuario SET
	nombre = '$nombre',
	apellido = '$apellido',
	email = '$email',
	pass = '$pass',
	telefono  = '$telefono',
	tipoUsuario    = '$tipoUsuario',
	pais  = '$pais',
	estado 		= '$estado',
	ciudad = '$ciudad',
	direccion= '$direccion'	
WHERE ID = '$idContacto'";
$sql = mysql_query($consulta, $conexion);

echo "<br><br>";
echo "<div style='text-align: center; color:green;'>LOS DATOS FUERON ACTUALIZAOS CON EXITO</div>";
}

?>


















<?php
$ssql = mysql_query("SELECT * FROM usuario WHERE ID='$idContacto'");
$nombre = mysql_result($ssql,0,"nombre");
$apellido = mysql_result($ssql,0,"apellido");
$email = mysql_result($ssql,0,"email");
$pass = mysql_result($ssql,0,"pass");
$telefono = mysql_result($ssql,0,"telefono");+
$direccion = mysql_result($ssql,0,"direccion");
$pais = mysql_result($ssql,0,"pais");
$estado = mysql_result($ssql,0,"estado");
$ciudad = mysql_result($ssql,0,"ciudad");
$tipoUsuario = mysql_result($ssql,0,"tipoUsuario");
?>






<br><br>








<div id="according">


	<div id="elemento1Arcorderon" class="show">
			<div class="panel">
			<div class="panel-heading">
				Editar de Contacto
				<div style="color:blue; font-size: 12px; ">
				FALTA AGREGAR FECHA DE REGISTRO--- DESDE LA APP O DESDE LA WEB--DESACTIVAR USUARIO
				</div>
			</div>
			<div class="panel-body">
				<form method="post" action="#">
					<table>
						<tr>
							<td style="text-align: right;">Nombre</td>
							<td><input type="text" name="nombre" class="input_text" value="<?php echo $nombre?>"></td>
							<td style="text-align: right;">Apellido</td>
							<td><input type="text" name="apellido" class="input_text" value="<?php echo $apellido ?>">
							</td>
						</tr>
						<tr>
							<td style="text-align: right;">Email</td>
							<td>
								<input type="text" name="email" class="input_text" value="<?php echo $email ?>">									
							</td>
							<td style="text-align: right;">Password</td>
							<td>
								<input type="text" name="pass" class="input_text" value="<?php echo $pass ?>">							
							</td>
						</tr>
						<tr>
							<td style="text-align: right;">Telefono</td>
							<td><input type="text" name="telefono" class="input_text" value="<?php echo $telefono ?>"></td>
							<td style="text-align: right;">Tipo de Usuario</td>
							<td><input type="text" name="tipoUsuario" class="input_text" value="<?php echo $tipoUsuario ?>" >cliente/asesor</td>
						</tr>
						<tr>
							<td style="text-align: right;">Pais</td>
							<td><input type="text" name="pais" class="input_text" value="<?php echo $pais ?>"></td>
							<td style="text-align: right;">Estado</td>
							<td><input type="text" name="estado" class="input_text" value="<?php echo $estado ?>"></td>
						</tr>
						<tr>
							<td style="text-align: right;">Ciudad</td>
							<td>
								<input type="text" name="ciudad" class="input_text" value="<?php echo $ciudad ?>">
							</td>
							<td style="text-align: right;">Direccion</td>
							<td>
								<input type="text"  class="input_text" name="direccion" value="<?php echo $direccion ?>" >				               
							</td>
            			</tr>
            			

					</table>			
					
					<input type="hidden" name="idContacto" value="<?php echo $idContacto; ?>">
					<br><br><br>
					<div style="text-align: center;"><input style ="width: 200px;" type="submit" name="guardarContacto" value="Guardar Cambios" class="input_buton"></div>

				</form>
			</div>
		</div>
	</div>
</div>






</body>
</html>

<?php

}else{
  header("location:index.php");
}

?>
