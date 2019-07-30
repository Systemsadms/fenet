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



<style type="text/css">

	.show{
		display: block;
	}

	.hidden{
		display: none;
	}
</style>


<script type="text/javascript">

$(function(){
     $("#Dato1").click(function(e){
     	$("#elemento1Arcorderon").css("display", "block");
     	$("#elemento2Arcorderon").css("display", "none");
     	$("#elemento3Arcorderon").css("display", "none");
     	$("#elemento4Arcorderon").css("display", "none");
     });
     $("#Dato2").click(function(e){
     	$("#elemento1Arcorderon").css("display", "none");
     	$("#elemento2Arcorderon").css("display", "block");
     	$("#elemento3Arcorderon").css("display", "none");
     	$("#elemento4Arcorderon").css("display", "none");
     });
     $("#Dato3").click(function(e){
     	$("#elemento1Arcorderon").css("display", "none");
     	$("#elemento2Arcorderon").css("display", "none");
     	$("#elemento3Arcorderon").css("display", "block");
     	$("#elemento4Arcorderon").css("display", "none");
     });
});
</script>


</head>
<body>



<header>
	<img src="images/logo.png">

</header>


<?php
include("menu.php");
 ?>


<div class="breadcrumb">Inicio /  <b>Detalles de Cliente</b></div>



<br><br>




<?php

$idContacto= $_POST['idContacto'];

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





	<div class="panel">

	<div class="panel-heading">
		Detalles del Registro

		<div style="color:blue; font-size: 12px; ">
			FALTA AGREGAR FECHA DE REGISTRO--- DESDE LA APP O DESDE LA WEB--DESACTIVAR USUARIO
			<!--
			<b>Registrado en:</b> <?php echo $cont_dateadded; ?>/
			
			<b>Por el Usuario:</b> <?php echo $cont_addedby; ?>/
			
			<b>Ultima Actualizacion:</b> <?php echo $cont_lastupdate; ?>/
			
			<b>Actualizado Por:</b> <?php echo $cont_updatedby; ?>
			-->
		</div>

	</div>

	<div class="panel-body">

		<div id="headerAcording">
			<div style="width: 200px; display: inline-block;">
				<input type="button" id="Dato1" value="Informacion Contacto" class="input_buton" style="width: 200px;">
			</div>
			<!--
			<div style="width: 230px; display: inline-block;">
				<input type="button" id="Dato2" value="Informacion Corporativa" class="input_buton" style="width: 230px;">
			</div>
			<div style="width: 200px; display: inline-block;">
				<input type="button" id="Dato3" value="MODELO DE NEGOCIO" class="input_buton" style="width: 200px;">
			</div>
		-->
		</div>












		<div id="elemento1Arcorderon" class="show">
			<table>
				<tr>
					<td style="text-align: right;">Nombre:</td>
					<td><b><?php echo $nombre; ?></b></td>
					<td style="text-align: right;">Apellido:</td>
					<td><b><?php echo $apellido; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Email:</td>
					<td><b><?php echo $email; ?></b></td>
					<td style="text-align: right;">Password:</td>
					<td><b><?php echo $pass; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Telefono:</td>
					<td><b><?php echo $telefono; ?></b></td>
					<td style="text-align: right;">Tipo de Usuario:</td>
					<td><b><?php echo $tipoUsuario; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Pais:</td>
					<td><b><?php echo $pais; ?></b></td>
					<td style="text-align: right;">Estado:</td>
					<td><b><?php echo $estado; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Ciudad:</td>
					<td><b><?php echo $ciudad; ?></b></td>
					<td style="text-align: right;">Direccion:</td>
					<td><b><?php echo $direccion; ?></b></td>
				</tr>
			</table>    
    	</div><!--FIN DE LA INFORMACION DE CONTACTO-->














<!--






		<div id="elemento2Arcorderon" class="hidden">
			<table>
				<tr>
					<td style="text-align: right;">Empresa:</td>
					<td><b><?php echo $cont_companyname; ?></b></td>
					<td style="text-align: right;">Fundada:</td>
					<td><b><?php echo $cont_aniversario; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Email1:</td>
					<td><b><?php echo $cont_emailEmpresa; ?></b></td>
					<td style="text-align: right;">Email2:</td>
					<td><b><?php echo $cont_emailEmpresa2; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Telefono:</td>
					<td><b><?php echo $cont_enterprisephone; ?></b></td>
					<td style="text-align: right;">Telefono2:</td>
					<td><b><?php echo $cont_enterprisephone2; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">WebSite:</td>
					<td><b><?php echo $cont_website1; ?></b></td>
					<td style="text-align: right;">WebSite2:</td>
					<td><b><?php echo $cont_website2; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Pais:</td>
					<td><b><?php echo $cont_country; ?></b></td>
					<td style="text-align: right;">Estado:</td>
					<td><b><?php echo $cont_state; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Ciudad:</td>
					<td><b><?php echo $cont_city; ?></b></td>
					<td style="text-align: right;">Direccion:</td>
					<td><b><?php echo $cont_addressline1; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Codigo Postal:</td>
					<td><b><?php echo $cont_zip; ?></b></td>
					<td style="text-align: right;">Rif:</td>
					<td><b><?php echo $cont_rif; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Descripcion:</td>
					<td><b>
						<div style="width:300px;"><?php echo $cont_descripcion; ?></div></b></td>					
				</tr>
			</table>    
		</div><!--FIN DE LA INFORMACION CORPORATIVA-->























<!--



		<div id="elemento3Arcorderon" class="hidden">
			<table>
				<tr>
					<td style="text-align: right;">Ejecutivo:</td>
					<td><b><?php echo $cont_ejecutivo; ?></b></td>
					<td style="text-align: right;">Industria:</td>
					<td><b><?php echo $cont_insdustria; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Linea de Negocio:</td>
					<td><b><?php echo $cont_lineaNegocios; ?></b></td>
					<td style="text-align: right;">Tipo:</td>
					<td><b><?php echo $cont_tipo; ?></b></td>
					
					
				</tr>
				<tr>
					<td style="text-align: right;">Servicios:</td>
					<td><b><?php echo $cont_servicios; ?></b></td>
					<td style="text-align: right;">Productos:</td>
					<td><b><?php echo $cont_productos; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Numero de Empleados:</td>
					<td><b><?php echo $cont_employees; ?></b></td>
					<td style="text-align: right;">Volumen de Ventas:</td>
					<td><b><?php echo $cont_sale_volume; ?></b></td>
				</tr>
			</table>
		</div><!--FIN DE LA INFORMACION DE NEGOCIOS-->













	</div>
	</div>






</body>
</html>

<?php

}else{
  header("location:index.php");
}

?>
