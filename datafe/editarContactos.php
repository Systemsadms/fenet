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

 date_default_timezone_set('America/Caracas');
 $cont_lastupdate =date('Y-m-d G:i:s');
 $cont_updatedby =$_SESSION['login'];
 $cont_firstname =$_POST['nombre'];
 $cont_lastname1 =$_POST['apellido'];
 $cont_birthday =$_POST['birthday'];
 $cont_jobtitle =$_POST['posicion'];
 $cont_email =$_POST['email'];
 $cont_companyname =$_POST['empresa'];
 $cont_emailEmpresa = $_POST['emailEmpresa'];
 $cont_emailEmpresa2 = $_POST['emailEmpresa2'];
 $cont_workphone =$_POST['telefonoTrabajo'];
 $cont_cellphone =$_POST['telefonoMovil'];
 $cont_enterprisephone =$_POST['telefonoEmpresa1'];
 $cont_enterprisephone2 =$_POST['telefonoEmpresa2'];
 $cont_city =$_POST['ciudad'];
 $cont_addressline1 =$_POST['direccion'];
 $cont_zip =$_POST['zip'];
 $cont_rif =$_POST['rif'];
 $cont_descripcion =$_POST['descripcion'];
 
 $cont_genero = $_POST['genero'];
 $cont_ejecutivo = $_POST['ejecutivo'];
 
 
 $cont_servicios =$_POST['servicios'];
 $cont_productos =$_POST['productos'];
 $cont_employees =$_POST['empleados'];
 $cont_sale_volume =$_POST['volumenVentas'];
 $cont_website1 =$_POST['website'];
 $cont_website2 =$_POST['website2'];
 $cont_tipo =$_POST['tipo'];
 $cont_estado ='contacto';


include ("model/cnx2.php");

$consulta="UPDATE dataset_contactos SET
	cont_lastupdate = '$cont_lastupdate',
	cont_updatedby = '$cont_updatedby',
	cont_firstname = '$cont_firstname',
	cont_lastname1 = '$cont_lastname1',
	cont_birthday  = '$cont_birthday',
	cont_genero    = '$cont_genero',
	cont_jobtitle  = '$cont_jobtitle',
	cont_email 		= '$cont_email',
	cont_emailEmpresa = '$cont_emailEmpresa',
	cont_emailEmpresa2= '$cont_emailEmpresa2',	
	cont_workphone = '$cont_workphone',
	cont_cellphone = '$cont_cellphone',
	cont_enterprisephone = '$cont_enterprisephone',
	cont_enterprisephone2='$cont_enterprisephone2',
	cont_companyname = '$cont_companyname',
	cont_city  	   	= '$cont_city',
	cont_addressline1 = '$cont_addressline1',		
	cont_productos 	   = '$cont_productos',
	cont_servicios 	   = '$cont_servicios',	
	cont_ejecutivo 	   = '$cont_ejecutivo',
	cont_employees = '$cont_employees',
	cont_sale_volume = '$cont_sale_volume',
	cont_website1  = '$cont_website1',
	cont_website2  = '$cont_website2',
	cont_zip	   = '$cont_zip',
	cont_rif	   = '$cont_rif',
	cont_descripcion = '$cont_descripcion',
	cont_tipo 		= '$cont_tipo'
WHERE cont_id = '$idContacto'";
$sql = mysql_query($consulta, $conexion);

echo "<div style='text-align: center; color:green;'>LOS DATOS FUERON ACTUALIZAOS CON EXITO</div>";
}

?>






























<?php


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






<br><br>








<div id="according">


	<div id="elemento1Arcorderon" class="show">
			<div class="panel">
			<div class="panel-heading">Editar de Contacto</div>
			<div class="panel-body">
				<form method="post" action="#">
					<table>
						<tr>
							<td style="text-align: right;">Nombre</td>
							<td><input type="text" name="nombre" class="input_text" value="<?php echo $cont_firstname?>"></td>
							<td style="text-align: right;">Apellido</td>
							<td><input type="text" name="apellido" class="input_text" value="<?php echo $cont_lastname1 ?>">
							</td>
						</tr>
						<tr>
							<td style="text-align: right;">Fecha de Cumpleaños</td>
							<td>
								<input type="text" name="birthday" class="input_text" value="<?php echo $cont_birthday ?>">									
							</td>
							<td style="text-align: right;">Genero</td>
							<td>
								<input type="text" name="genero" class="input_text" value="<?php echo $cont_genero ?>">							
							</td>
						</tr>
						<tr>
							<td style="text-align: right;">Posicion</td>
							<td><input type="text" name="posicion" class="input_text" value="<?php echo $cont_jobtitle ?>"></td>
							<td style="text-align: right;">Correo Electronico</td>
							<td><input type="text" name="email" class="input_text" value="<?php echo $cont_email ?>"></td>
						</tr>
						<tr>
							<td style="text-align: right;">Telefono Trabajo</td>
							<td><input type="text" name="telefonoTrabajo" class="input_text" value="<?php echo $cont_workphone ?>"></td>
							<td style="text-align: right;">Telefono Movil</td>
							<td><input type="text" name="telefonoMovil" class="input_text" value="<?php echo $cont_cellphone ?>"></td>
						</tr>
						<tr>
							<td style="text-align: right;">Empresa</td>
							<td>
								<input type="text" name="empresa" class="input_text" value="<?php echo $cont_companyname ?>">
							</td>
							<td style="text-align: right;">Fundada</td>
							<td>
								<input type="text"  class="input_text" value="<?php echo $cont_aniversario ?>" disabled>				               
							</td>
            			</tr>
            			<tr>
				              <td style="text-align: right;">Email Empresa1</td>
				              <td>
				              	<input type="text" name="emailEmpresa" class="input_text" value="<?php echo $cont_emailEmpresa ?>"></td>
				              </td>
				              <td style="text-align: right;">Email Empresa2</td>
				              <td><input type="text" name="emailEmpresa2" class="input_text" value="<?php echo $cont_emailEmpresa2 ?>"></td>
				            </tr>
				            <tr>
				              <td style="text-align: right;">Telefono</td>
				              <td><input type="text" name="telefonoEmpresa1" class="input_text" value="<?php echo $cont_enterprisephone ?>"></td>
				              <td style="text-align: right;">Telefono2</td>
				              <td><input type="text" name="telefonoEmpresa2" class="input_text" value="<?php echo $cont_enterprisephone2 ?>"></td>
				            </tr>
				            <tr>
								<td style="text-align: right;">Pais</td>
								<td>
									<input type="text" name="" class="input_text" value="<?php echo $cont_country ?>" disabled>
								</td>
								<td style="text-align: right;">Estado</td>
								<td>
									<input type="text" name="" class="input_text" value="<?php echo $cont_state ?> " disabled>
								</td>
							</tr>
							<tr>
				              	<td style="text-align: right;">Ciudad</td>
							  	<td><input type="text" name="ciudad" class="input_text" value="<?php echo $cont_city ?> "></td>
								<td style="text-align: right;">Direccion</td>
								<td><input type="text" name="direccion" class="input_text" value="<?php echo $cont_addressline1 ?> "></td>
							</tr>
				            <tr>
				              	<td style="text-align: right;">Codigo Postal</td>
								<td><input type="text" name="zip" class="input_text" value="<?php echo $cont_zip ?> "></td>
				              	<td style="text-align: right;">Rif/Nit</td>
								<td><input type="text" name="rif" class="input_text" value="<?php echo $cont_rif ?> "></td>
							</tr>
				            <tr>
				              <td style="text-align: right;">Descripcion del Negocio</td>
				              <td><textarea name="descripcion" rows="4" cols="33"><?php echo $cont_descripcion ?> </textarea></td>
				            </tr>
				            <tr>
				              <td><br></td>
				              <td><hr></td>
				            </tr>
				            <tr>
				              	<td style="text-align: right;">Ejecutivo</td>
								<td><input type="text" name="ejecutivo" class="input_text" value="<?php echo $cont_ejecutivo ?> "></td>
								<td style="text-align: right;">Industria</td>
								<td>
				                	<input type="text" name="Industria" class="input_text" value="<?php echo $cont_insdustria; ?> " disabled>
				              </td>
							</tr>
							<tr>
								<td style="text-align: right;">Linea de Negocio</td>
								<td>
					                <input type="text" name="lineaNegocios" class="input_text" value="<?php echo $cont_lineaNegocios; ?> " disabled>
					             </td>
					             <td style="text-align: right;">Tipo</td>
								<td>
					                <input type="text" name="tipo" class="input_text" value="<?php echo $cont_tipo; ?> ">
					             </td>
							</tr>
							<tr>
	              				<td style="text-align: right;">Servicios</td>
								<td><input type="text" name="servicios" class="input_text" value="<?php echo $cont_servicios; ?> "></td>
								<td style="text-align: right;">Productos</td>
								<td><input type="text" name="productos" class="input_text" value="<?php echo $cont_productos; ?> "></td>
							</tr>
							<tr>
								<td style="text-align: right;">Numero de Empleados</td>
								<td><input type="text" name="empleados" class="input_text" value="<?php echo $cont_employees; ?> "></td>
								<td style="text-align: right;">Volumen de Ventas Anual</td>
								<td><input type="text" name="volumenVentas" class="input_text" value="<?php echo $cont_sale_volume; ?> "></td>
							</tr>
							<tr>
								<td style="text-align: right;">Web Site </td>
								<td><input type="text" name="website" class="input_text" value="<?php echo $cont_website1; ?> "></td>
	              				<td style="text-align: right;">Web Site2 </td>
								<td><input type="text" name="website2" class="input_text" value="<?php echo $cont_website2; ?> "></td>
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
