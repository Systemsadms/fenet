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

$ssql = mysql_query("SELECT * FROM dataset_contactos WHERE cont_id='$idContacto'");
$cont_dateadded = mysql_result($ssql,0,"cont_dateadded");
$cont_addedby = mysql_result($ssql,0,"cont_addedby");
$cont_lastupdate = mysql_result($ssql,0,"cont_lastupdate");
$cont_updatedby = mysql_result($ssql,0,"cont_updatedby");
$cont_firstname = mysql_result($ssql,0,"cont_firstname");
$cont_lastname1 = mysql_result($ssql,0,"cont_lastname1");
$cont_birthday = mysql_result($ssql,0,"cont_birthday");
$cont_genero = mysql_result($ssql,0,"cont_genero");
$cont_jobtitle = mysql_result($ssql,0,"cont_jobtitle");
$cont_email = mysql_result($ssql,0,"cont_email");
$cont_cellphone = mysql_result($ssql,0,"cont_cellphone");
$cont_workphone = mysql_result($ssql,0,"cont_workphone");
$cont_companyname = mysql_result($ssql,0,"cont_companyname");
$cont_aniversario = mysql_result($ssql,0,"cont_aniversario");
$cont_emailEmpresa = mysql_result($ssql,0,"cont_emailEmpresa");
$cont_emailEmpresa2 = mysql_result($ssql,0,"cont_emailEmpresa2");
$cont_enterprisephone = mysql_result($ssql,0,"cont_enterprisephone");
$cont_enterprisephone2 = mysql_result($ssql,0,"cont_enterprisephone2");
$cont_country = mysql_result($ssql,0,"cont_country");
$cont_state = mysql_result($ssql,0,"cont_state");
$cont_city = mysql_result($ssql,0,"cont_city");
$cont_addressline1 = mysql_result($ssql,0,"cont_addressline1");
$cont_zip = mysql_result($ssql,0,"cont_zip");
$cont_rif = mysql_result($ssql,0,"cont_rif");
$cont_descripcion = mysql_result($ssql,0,"cont_descripcion");
$cont_ejecutivo = mysql_result($ssql,0,"cont_ejecutivo");
$cont_insdustria = mysql_result($ssql,0,"cont_insdustria");
$cont_lineaNegocios = mysql_result($ssql,0,"cont_lineaNegocios");
$cont_servicios = mysql_result($ssql,0,"cont_servicios");
$cont_productos = mysql_result($ssql,0,"cont_productos");

$cont_employees = mysql_result($ssql,0,"cont_employees");
$cont_sale_volume = mysql_result($ssql,0,"cont_sale_volume");
$cont_website1 = mysql_result($ssql,0,"cont_website1");
$cont_website2 = mysql_result($ssql,0,"cont_website2");
$cont_tipo = mysql_result($ssql,0,"cont_tipo");
?>





	<div class="panel">
	<div class="panel-heading">
		Detalles del Registro
		<div style="color:blue; font-size: 12px; ">
			<b>Registrado en:</b> <?php echo $cont_dateadded; ?>/
			
			<b>Por el Usuario:</b> <?php echo $cont_addedby; ?>/
			
			<b>Ultima Actualizacion:</b> <?php echo $cont_lastupdate; ?>/
			
			<b>Actualizado Por:</b> <?php echo $cont_updatedby; ?>
		</div>

	</div>
	<div class="panel-body">

		<div id="headerAcording">
			<div style="width: 200px; display: inline-block;">
				<input type="button" id="Dato1" value="Informacion Contacto" class="input_buton" style="width: 200px;">
			</div>
			<div style="width: 230px; display: inline-block;">
				<input type="button" id="Dato2" value="Informacion Corporativa" class="input_buton" style="width: 230px;">
			</div>
			<div style="width: 200px; display: inline-block;">
				<input type="button" id="Dato3" value="MODELO DE NEGOCIO" class="input_buton" style="width: 200px;">
			</div>
		</div>












		<div id="elemento1Arcorderon" class="show">
			<table>
				<tr>
					<td style="text-align: right;">Nombre:</td>
					<td><b><?php echo $cont_firstname; ?></b></td>
					<td style="text-align: right;">Apellido:</td>
					<td><b><?php echo $cont_lastname1; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Fecha de Cumpleaños:</td>
					<td><b><?php echo $cont_birthday; ?></b></td>
					<td style="text-align: right;">Genero:</td>
					<td><b><?php echo $cont_genero; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Posicion:</td>
					<td><b><?php echo $cont_jobtitle; ?></b></td>
					<td style="text-align: right;">Correo Electronico:</td>
					<td><b><?php echo $cont_email; ?></b></td>
				</tr>
				<tr>
					<td style="text-align: right;">Telefono Trabajo:</td>
					<td><b><?php echo $cont_workphone; ?></b></td>
					<td style="text-align: right;">Telefono Movil:</td>
					<td><b><?php echo $cont_cellphone; ?></b></td>
				</tr>
			</table>    
    	</div><!--FIN DE LA INFORMACION DE CONTACTO-->















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
