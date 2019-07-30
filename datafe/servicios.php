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



<style type="text/css">

	.show{
		display: block;
	}

	.hidden{
		display: none;
	}

#box-wrapper{
  width: 95%;
  background-color: #F5F5F5;
  margin: 0 auto;
  box-sizing: border-box;
  padding-top: 1px;
  padding-bottom: 50px;
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


<div class="breadcrumb">Inicio /  <b>Importar Contactos</b></div>
<br><br>















	<div class="panel">
	<div class="panel-heading">
		Registro de Contacto
	</div>

	<div class="panel-body">

		<div id="headerAcording">
			<div style="width: 200px; display: inline-block;">
				<input type="button" id="Dato1" value="Servicios Solicitados" class="input_buton" style="width: 200px;">
			</div>
			<div style="width: 230px; display: inline-block;">
				<input type="button" id="Dato2" value="Ventas Realizadas" class="input_buton" style="width: 230px;">
			</div>
			<div style="width: 200px; display: inline-block;">
				<input type="button" id="Dato3" value="..." class="input_buton" style="width: 200px;">
			</div>
		</div>












		<div id="elemento1Arcorderon" class="show">
				<div id="box-wrapper">
					<?php

				$consulta = "SELECT * FROM servicio WHERE estatus='solicitado' order by idServicio desc ";



					$hacerconsulta=mysql_query ($consulta,$conexion);
							 //$hacerconsulta=mysql_query ($consulta,$conexion);

							echo "<table class='table-sm table-striped' style='width:100%;'>";
							echo "<tr>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>idServicio</b></font></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Servicio</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Descripcion</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Pais</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Estado</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Ciudad</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Direccion</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Fecha</b></td>";echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Hora</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Cliente</b></td>";
							
							echo "</tr>";


							$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);

							while ($reg)
							{
							echo "<tr>";
							echo "<td align='center' >".$reg[0]."</td>";
							echo "<td align='center' >".utf8_decode($reg[1])."</td>";
							echo "<td align='center' >".utf8_decode($reg[3])."</td>";
							echo "<td align='center' >".utf8_decode($reg[7])."</td>";
							echo "<td align='center' >".$reg[6]."</td>";
							echo "<td align='center' >".utf8_decode($reg[5])."</td>";
							echo "<td align='center' >".$reg[4]."</td>";
							echo "<td align='center' >".$reg[8]."</td>";
							echo "<td align='center' >".$reg[9]."</td>";
							


							echo "<td  align='center' style='border: inset 0pt'>
								<form action='verUsuarios.php' method='post'>
									<input type='hidden' name='idContacto' value=".$reg[11].">
									<input type='image' name='imageField' src='images/view.gif' />
								</form>
							</td>";//FIN DEL echo

							



							$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
							echo "</tr>";
							}
							echo "</table>";
							


			?>
				</div><!--Fin box wrapper-->
    	</div><!--FIN ELEMENTO ARORDEON 1-->



























		<div id="elemento2Arcorderon" class="hidden">
			<div id="box-wrapper">
				<?php

				$consulta2 = "SELECT * FROM ventas WHERE id_venta>0 ORDER BY id_venta desc";



					$hacerconsulta2=mysql_query ($consulta2,$conexion);
							 //$hacerconsulta=mysql_query ($consulta,$conexion);

							echo "<table class='table-sm table-striped' style='width:100%;'>";
							echo "<tr>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>idVenta</b></font></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>TipoCliente</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>PaisCliente</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Industria</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>LineaNegocio</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>TipoVenta</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Descripcion</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Proveedor</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>PaisProveedor</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Monto</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Cliente</b></td>";
							
							echo "</tr>";


							$reg2 = mysql_fetch_array($hacerconsulta2,MYSQL_BOTH);

							while ($reg2)
							{
							echo "<tr>";
							echo "<td align='center' >".$reg2[0]."</td>";
							echo "<td align='center' >".utf8_decode($reg2[1])."</td>";
							echo "<td align='center' >".utf8_decode($reg2[3])."</td>";
							echo "<td align='center' >".utf8_decode($reg2[4])."</td>";
							echo "<td align='center' >".$reg2[5]."</td>";
							echo "<td align='center' >".$reg2[6]."</td>";
							echo "<td align='center' >".$reg2[7]."</td>";
							echo "<td align='center' >".$reg2[8]."</td>";
							echo "<td align='center' >".$reg2[9]."</td>";
							echo "<td align='center' >".$reg2[10]."</td>";
							
if($reg2[1]=='empresa'){
	echo "<td  align='center' style='border: inset 0pt'>
								<form action='verContactos.php' method='post'>
									<input type='hidden' name='idContacto' value="
									.$reg2[2].
									">
									<input type='image' name='imageField' src='images/view.gif' />
								</form>
							</td>";//FIN DEL echo
}else{
	echo "<td  align='center' style='border: inset 0pt'>
								<form action='verUsuarios.php' method='post'>
									<input type='hidden' name='idContacto' value="
									.$reg2[2].
									">
									<input type='image' name='imageField' src='images/view.gif' />
								</form>
							</td>";//FIN DEL echo
}

							

							



							$reg2 = mysql_fetch_array($hacerconsulta2,MYSQL_BOTH);
							echo "</tr>";
							}
							echo "</table>";
							mysql_close($conexion);


			?>			
			</div>
		</div><!--FIN DE LA INFORMACION CORPORATIVA-->

























		<div id="elemento3Arcorderon" class="hidden">
			Tab3
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
