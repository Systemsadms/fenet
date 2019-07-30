<?php

  session_start();
  if ($_SESSION['login'])
    {

    	require('model/cnx2.php');
    	include("model/selects_db.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inteligencia de Mercado</title>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
<!--
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
-->

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8"/>

<!--
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
-->



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


if(isset($_POST['cargarVenta'])){


 $tipo_cliente= $_POST['tipo_cliente'];
 $id_cliente= $_POST['idContacto'];
 $pais_cliente= $_POST['pais_contacto'];
 $industria= $_POST['industria'];
 $linea_negocio= $_POST['linea_negocio'];
 $tipo_venta= $_POST['tipo_venta'];
 $descripcion= $_POST['descripcion'];
 $proveedor= $_POST['proveedor'];
 $pais_proveedor= $_POST['pais_proveedor'];
 $monto= $_POST['monto'];
 $metodo_pago= $_POST['metodo_pago'];
 $condicion_pago= $_POST['condicion_pago'];


mysql_query ("INSERT INTO ventas VALUES (
  '',
  '$tipo_cliente',
  '$id_cliente',
  '$pais_cliente',
  '$industria',
  '$linea_negocio',
  '$tipo_venta',
  '$descripcion',
  '$proveedor',
  '$pais_proveedor',
  '$monto',
  '$metodo_pago',
  '$condicion_pago'
  )");

	if($tipo_cliente == 'empresa'){
	$consulta="UPDATE dataset_contactos SET
		cont_estado = 'cliente'
	WHERE cont_id = '$id_cliente'";
	$sql = mysql_query($consulta, $conexion);

	echo "<div class='guardado'>LA VENTA FUE REGISTRADA CON EXITO</div>";


	}elseif($tipo_cliente == 'usuario'){

		echo "<div class='guardado'>LA VENTA FUE REGISTRADA CON EXITO<br><font color='red'>FALTA CAMBIAR EL ESTADOS DE USUARIO A CLIENTE</font></div>";
	}


}else{


?>










<?php
if(isset($_POST['idContacto'])){

	$idContacto= $_POST['idContacto'];
	$tipo_cliente= "empresa";

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
$pais = mysql_result($ssql,0,"cont_country");
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
				<div id="according">


					<div id="elemento1Arcorderon" class="show">
							<div class="panel">
							<div class="panel-heading">
								Datos de la Empresa
							</div>
							<div class="panel-body">
								
									<table>
										<tr>
											<td style="text-align: right;">Contacto</td>
											<td><input type="text" name="nombre" class="input_text" value="<?php echo $cont_firstname.' '.$cont_lastname1?>"></td>
											<td style="text-align: right;">Cargo</td>
											<td><input type="text" name="apellido" class="input_text" value="<?php echo $cont_jobtitle ?>">
											</td>
										</tr>
										<tr>
											<td style="text-align: right;">Telefono</td>
											<td>
												<input type="text" name="email" class="input_text" value="<?php echo $cont_cellphone ?>">									
											</td>
											<td style="text-align: right;">Telefono Trabajo</td>
											<td>
												<input type="text" name="telefono" class="input_text" value="<?php echo $cont_workphone ?>">							
											</td>
										</tr>
										<tr>
											<td style="text-align: right;">correo</td>
											<td><input type="text" name="pais" class="input_text" value="<?php echo $cont_email ?>"></td>
											<td style="text-align: right;">Genero</td>
											<td><input type="text" name="estado" class="input_text" value="<?php echo $cont_genero ?>"></td>
										</tr>
										<tr>
											<td style="text-align: right;">Empresa</td>
											<td>
												<input type="text" name="ciudad" class="input_text" value="<?php echo $cont_companyname ?>">
											</td>
											<td style="text-align: right;">Rif</td>
											<td>
												<input type="text"  class="input_text" name="direccion" value="<?php echo $cont_rif ?>" >				               
											</td>
				            			</tr>
				            			<tr>
											<td style="text-align: right;">Telefono 1</td>
											<td>
												<input type="text" name="ciudad" class="input_text" value="<?php echo $cont_enterprisephone ?>">
											</td>
											<td style="text-align: right;">Telefono 2</td>
											<td>
												<input type="text"  class="input_text" name="direccion" value="<?php echo $cont_enterprisephone2 ?>" >				               
											</td>
				            			</tr>
				            			<tr>
											<td style="text-align: right;">Email</td>
											<td>
												<input type="text" name="ciudad" class="input_text" value="<?php echo $cont_emailEmpresa ?>">
											</td>
											<td style="text-align: right;">Email 2</td>
											<td>
												<input type="text"  class="input_text" name="direccion" value="<?php echo $cont_emailEmpresa2 ?>" >				               
											</td>
				            			</tr>
				            			<tr>
											<td style="text-align: right;">Inudustria</td>
											<td>
												<input type="text" name="ciudad" class="input_text" value="<?php echo $cont_insdustria ?>">
											</td>
											<td style="text-align: right;">Linea de Negocio</td>
											<td>
												<input type="text"  class="input_text" name="direccion" value="<?php echo $cont_lineaNegocios ?>" >				               
											</td>
				            			</tr>
				            			<tr>
											<td style="text-align: right;">Pais</td>
											<td>
												<input type="text" name="ciudad" class="input_text" value="<?php echo $pais ?>">
											</td>
											<td style="text-align: right;">Estado</td>
											<td>
												<input type="text"  class="input_text" name="direccion" value="<?php echo $cont_state ?>" >				               
											</td>
				            			</tr>
				            			<tr>
											<td style="text-align: right;">Ciudad</td>
											<td>
												<input type="text" name="ciudad" class="input_text" value="<?php echo $cont_city ?>">
											</td>
											<td style="text-align: right;">Direccion</td>
											<td>
												<input type="text"  class="input_text" name="direccion" value="<?php echo $cont_addressline1 ?>" >				               
											</td>
				            			</tr>

									</table>			
									
								
								
							</div>
						</div>
					</div>
				</div>
				<?php

}elseif(isset($_POST['idUsuario'])){

		$idContacto= $_POST['idUsuario'];
		$tipo_cliente= "usuario";

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
				<div id="according">


					<div id="elemento1Arcorderon" class="show">
							<div class="panel">
							<div class="panel-heading">
								Datos del Usuario
							</div>
							<div class="panel-body">
								
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
											<td style="text-align: right;">Telefono</td>
											<td>
												<input type="text" name="telefono" class="input_text" value="<?php echo $telefono ?>">							
											</td>
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
									
									<!--
									<input type="hidden" name="idContacto" value="<?php echo $idContacto; ?>">
									<br><br><br>
									<div style="text-align: center;"><input style ="width: 200px;" type="submit" name="guardarContacto" value="Guardar Cambios" class="input_buton"></div>
									-->
								</form>
							</div>
						</div>
					</div>
				</div>

		<?php

}
?>














<div id="according">


					<div id="elemento1Arcorderon" class="show">
							<div class="panel">
							<div class="panel-heading">
								Cargar datos de la venta
							</div>
							<div class="panel-body">
								<form method="post" action="#"> 
									<table>
										<tr>
											<td style="text-align: right;">Industria</td>
											<td>
												<select name="industria" id="industria">
									                  <option value="none"></option>
									                  <?php

									                  # llenamos los valores del pais de la base de datos
									                  $sql="SELECT * FROM industrias ORDER BY industria";
									                  foreach($dbh->query($sql) as $row)
									                  {
									                      echo "<option value='".$row["industria"]."'>".$row["industria"]."</option>";
									                  }
									                  ?>
												</select>								
											</td>
											<td style="text-align: right;">Linea de Negocio</td>
											<td>
												<select name="lineaNegocios" id="lineaNegocio" disabled>
				                				</select>						
											</td>
										</tr>
										<tr>
											<td style="text-align: right;">Tipo</td>
											<td>
												<select name="tipo_venta">
													<option></option>
													<option>Producto</option>
													<option>Servicio</option>
												</select>
												
											</td>
											<td style="text-align: right;">Descripcion</td>
											<td>
												<input type="text" name="descripcion" class="input_text">	
											</td>
										</tr>										
										<tr>
											<td style="text-align: right;">Proveedor</td>
											<td>
												<select name="proveedor" id="pais">
									                  <option value="none"></option>
									                  <?php

									                  # llenamos los valores del pais de la base de datos
									                  $sql="SELECT * FROM dataset_contactos ORDER BY cont_companyname";
									                  foreach($dbh->query($sql) as $row)
									                  {
									                      echo "<option value='".$row["cont_companyname"]."'>".$row["cont_companyname"]."</option>";
									                  }
									                  ?>
												</select>								
											</td>
											<td style="text-align: right;">Pais</td>
											<td>
												<select name="pais_proveedor" id="pais">
									                  <option value="none"></option>
									                  <?php

									                  # llenamos los valores del pais de la base de datos
									                  $sql="SELECT * FROM paises ORDER BY pais";
									                  foreach($dbh->query($sql) as $row)
									                  {
									                      echo "<option value='".$row["pais"]."'>".$row["pais"]."</option>";
									                  }
									                  ?>
												</select>						
											</td>
										</tr>
										<tr>
											<td style="text-align: right;">Monto</td>
											<td>
												<input type="text" name="monto" class="input_text">									
											</td>
											<td style="text-align: right;">Metodo de Pago</td>
											<td>
												<select name="metodo_pago">
													<option></option>
													<option>Efectivo</option>
													<option>Cheque</option>
													<option>Deposito</option>
													<option>Transferencia</option>
													<option>PayPal</option>
													<option>CriptoMoneda</option>
												</select>						
											</td>
										</tr>
										<tr>
											<td style="text-align: right;">Condicion de Pago</td>
											<td>
												<input type="text" name="condicion_pago" class="input_text">									
											</td>											
										</tr>
										
				            			

									</table>			
									
									
									<input type="hidden" name="idContacto" value="<?php echo $idContacto; ?>">
									<input type="hidden" name="pais_contacto" value="<?php echo $pais; ?>">
									<input type="hidden" name="tipo_cliente" value="<?php echo $tipo_cliente; ?>">
									<br><br><br>
									<div style="text-align: center;"><input style ="width: 200px;" type="submit" name="cargarVenta" value="Cargar Venta" class="input_buton"></div>
									
								</form>
							</div>
						</div>
					</div>
				</div>









<br><br>




<?php
}
?>









</body>
</html>

<?php

}else{
  header("location:index.php");
}

?>
