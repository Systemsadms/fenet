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


<div class="breadcrumb">Inicio /  <b>Busqueda de Contactos</b></div>



<div style="text-align: right; margin-right: 2%;">
<a href="busqueda.php">
	<input type="button" name="buscar" value="Busqueda Avanzada" class="input_buton" style="width: 300px; background-color: #25313E;">
</a>
</div>


























<div class="panel">
			<div class="panel-heading">Empresas y Proveedores</div>
			<div class="panel-body">
				<form method="post" action="#">
				<table>
					<tr>
						<td>Empresa</td>
						<td><input type="text" name="empresa"></td>
						<td>Pais</td>
						<td>
							<select name="pais" id="pais">
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
						<td style="text-align: right;">Fecha de Registro</td>
						<td class="test"><select name="month">
											<option value="none" selected></option>
											<option value="01">Enero</option>
											<option value="02">Febrero</option>
											<option value="03">Marzo</option>
											<option value="04">Abril</option>
											<option value="05">Mayo</option>
											<option value="06">Junio</option>
											<option value="07">Julio</option>
											<option value="08">Agosto</option>
											<option value="09">Septiembre</option>
											<option value="10">Octubre</option>
											<option value="11">Noviembre</option>
											<option value="12">Diciembre</option>
										</select>
						</td>
						<td class="test"><select name="year">
											<option value="none" selected></option>
											<option>2014</option>
											<option>2015</option>
											<option>2016</option>
											<option>2017</option>
											<option>2018</option>
                      <option>2019</option>
										</select>
						</td>
						<td class="test"><input type="submit" name="buscar" value="Buscar" class="input_buton"></td>
					</tr>

				</table>
	</form>
			</div>
</div>























<div class="panel">
			<div class="panel-heading">Usuarios Registrados</div>
			<div class="panel-body">
				<form method="post" action="#">
				<table>
					<tr>
						<td>Nombre</td>
						<td><input type="text" name="nombre"></td>

						<td>Apellido</td>
						<td><input type="text" name="apellido"></td>
						<td>Pais</td>
						<td>
							<select name="paisUsuario" id="pais">
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
						<!--
						<td style="text-align: right;">Fecha de Registro</td>
						<td class="test"><select name="month">
											<option value="none" selected></option>
											<option value="01">Enero</option>
											<option value="02">Febrero</option>
											<option value="03">Marzo</option>
											<option value="04">Abril</option>
											<option value="05">Mayo</option>
											<option value="06">Junio</option>
											<option value="07">Julio</option>
											<option value="08">Agosto</option>
											<option value="09">Septiembre</option>
											<option value="10">Octubre</option>
											<option value="11">Noviembre</option>
											<option value="12">Diciembre</option>
										</select>
						</td>
						<td class="test"><select name="year">
											<option value="none" selected></option>
											<option>2014</option>
											<option>2015</option>
											<option>2016</option>
											<option>2017</option>
											<option>2018</option>
                      <option>2019</option>
										</select>
						</td>
					-->
						<td class="test"><input type="submit" name="buscarUsuario" value="Buscar" class="input_buton"></td>
					</tr>

				</table>
	</form>
			</div>
</div>
































<div style="width: 90%; margin:0 auto; font-size: 13px;" >
	<?php


if(isset($_POST['buscarUsuario'])){

	$const ="ID > '0'";
	$queryConsulta= $const;

	$nombre =$_POST['nombre'];
	$apellido =$_POST['apellido'];
	$pais =$_POST['paisUsuario'];
	//$year =$_POST['year'];
	//$month =$_POST['month'];

	if($nombre != ""){
		$consultaNombre  =" and nombre LIKE '%$nombre%'";
		$queryConsulta = $queryConsulta . $consultaNombre;
	}

	if($apellido != ""){
		$consultaNombre  =" and apellido LIKE '%$apellido%'";
		$queryConsulta = $queryConsulta . $consultaNombre;
	}

	if($pais != "none"){
		 $consultaPais  =" and pais = '$pais'";
		$queryConsulta = $queryConsulta . $consultaPais;
	}


	$consulta = "SELECT * FROM usuario WHERE $queryConsulta  ";



					$hacerconsulta=mysql_query ($consulta,$conexion);
							 //$hacerconsulta=mysql_query ($consulta,$conexion);

							echo "<table class='table-sm table-striped' style='width:100%;'>";
							echo "<tr>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Codigo</b></font></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Nombre</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Apellido</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Correo</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Telefono</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Pais</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'style='border: inset 0pt;'></td>";
							echo "<td align='center' bgcolor='#e8e8e8'style='border: inset 0pt;'></td>";
							echo "</tr>";


							$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);

							while ($reg)
							{
							echo "<tr>";
							echo "<td align='center' >".$reg[0]."</td>";
							echo "<td align='center' >".utf8_decode($reg[1])."</td>";
							echo "<td align='center' >".utf8_decode($reg[2])."</td>";
							echo "<td align='center' >".$reg[3]."</td>";
							echo "<td align='center' >".utf8_decode($reg[5])."</td>";
							echo "<td align='center' >".$reg[8]."</td>";


							echo "<td  align='center' style='border: inset 0pt'>
								<form action='verUsuarios.php' method='post'>
									<input type='hidden' name='idContacto' value=".$reg[0].">
									<input type='image' name='imageField' src='images/view.gif' />
								</form>
							</td>";//FIN DEL echo

							echo "<td  align='center' style='border: inset 0pt'>
								<form action='editarUsuarios.php' method='post'>
									<input type='hidden' name='idContacto' value=".$reg[0].">
									<input type='image' name='imageField' src='images/edit.gif' />
								</form>
							</td>";//FIN DEL echo



							$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
							echo "</tr>";
							}
							echo "</table>";
							mysql_close($conexion);





}//FIN POST buscar usuario
?>
</div>

































<div>
<?php


if(isset($_POST['buscar'])){

	$const ="cont_id > '0'";
	$queryConsulta= $const;

	$empresa =$_POST['empresa'];
	$pais =$_POST['pais'];
	$year =$_POST['year'];
	$month =$_POST['month'];

	if($empresa != ""){
		$consultaEmpresa  =" and cont_companyname LIKE '%$empresa%'";
		$queryConsulta = $queryConsulta . $consultaEmpresa;
	}

	if($pais != "none"){
		 $consultaPais  =" and cont_country = '$pais'";
		$queryConsulta = $queryConsulta . $consultaPais;
	}


	if($year != "none" && $month != "none"){

		$consultaYearMonth  =" and YEAR (cont_dateadded) = '$year' AND MONTH (cont_dateadded) = '$month'";
		$queryConsulta = $queryConsulta . $consultaYearMonth;

	}else if($year != "none" && $month =="none"){

		$consultaYear  =" and YEAR (cont_dateadded) = '$year'";
		$queryConsulta = $queryConsulta . $consultaYear;
	}



//Este if es importante ya que determina si los datos post estan vacios o no para hacerla consulta
/*
	if($year == "none" && $month !="none"){
		echo "Tienes que seleccionar el año para realizar consulta<br>";
	}else{
		if($empresa =="" && $pais=="none" && $year== "none")
		{
			echo "Debes seleccionar al menos un caracter de busqueda";
		}else{
*/

			  $consulta = "SELECT * FROM dataset_contactos WHERE $queryConsulta  ";
       //$consulta = "SELECT * FROM dataset_clientes";


			 		?>
			 		<div style="width: 90%; margin:0 auto; font-size: 13px;" >
					<div style="text-align: right;">
						<form action="exportarFecha.php" method="post" target="_blank">
							<input type="hidden" name="consulta" value="<?php echo $consulta; ?>">
							<input type='image' name='imageField' src='images/exportxls.gif' />
						</form>
					</div>
					<?php

					$hacerconsulta=mysql_query ($consulta,$conexion);
							 //$hacerconsulta=mysql_query ($consulta,$conexion);

							echo "<table class='table-sm table-striped' style='width:100%;'>";
							echo "<tr>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Codigo</b></font></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Primer Nombre</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Primer Apellido</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Correo Electronico</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Empresa</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Pais</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'style='border: inset 0pt;'></td>";
							echo "<td align='center' bgcolor='#e8e8e8'style='border: inset 0pt;'></td>";
							echo "</tr>";


							$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);

							while ($reg)
							{
							echo "<tr>";
							echo "<td align='center' >".$reg[0]."</td>";
							echo "<td align='center' >".utf8_decode($reg[5])."</td>";
							echo "<td align='center' >".utf8_decode($reg[6])."</td>";
							echo "<td align='center' >".$reg[11]."</td>";
							echo "<td align='center' >".utf8_decode($reg[10])."</td>";
							echo "<td align='center' >".$reg[17]."</td>";


							echo "<td  align='center' style='border: inset 0pt'>
								<form action='verContactos.php' method='post'>
									<input type='hidden' name='idContacto' value=".$reg[0].">
									<input type='image' name='imageField' src='images/view.gif' />
								</form>
							</td>";//FIN DEL echo

							echo "<td  align='center' style='border: inset 0pt'>
								<form action='editarContactos.php' method='post'>
									<input type='hidden' name='idContacto' value=".$reg[0].">
									<input type='image' name='imageField' src='images/edit.gif' />
								</form>
							</td>";//FIN DEL echo



							$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
							echo "</tr>";
							}
							echo "</table>";
							mysql_close($conexion);

							?>
								</div>
							<?php

		//}// Fin del else $empresa =="" && $pais=="none" && $year== "none"

	//}//Fin de else $year == "none" && $month !="none"


}// Fin if isset post buscar


?>
</div>
























</body>
</html>

<?php

}else{
  header("location:index.php");
}

?>
