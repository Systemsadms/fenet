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


<div class="breadcrumb">Inicio /  <b>Agregar Categorias</b></div>

<br>














<?php
	if(isset($_POST['guardarPais'])){

				$pais = $_POST['newPais'];
				$codigo = $_POST['newCodigoPais'];

				$ssql = "SELECT * FROM paises WHERE pais='$pais' OR codigo='$codigo'";
				$rs = mysql_query($ssql,$conexion);
				if (mysql_num_rows($rs)>0)
				{

				    echo "<div class='noGuardado'>ESTE PAIS O CODIGO YA SE ENCUENTRA REGISTRADO</div>";

				}else{
					mysql_query ("INSERT INTO paises VALUES (
					  '$codigo',
					  '$pais'
					  )");

					echo "<div style='text-align: center; color:green;'>EL NUEVO PAIS SE HA AÑADIDO CON EXITO</div>";
				}

	}elseif(isset($_POST['guardarEstado'])){

				$codigoPais = $_POST['pais'];
				$estado = $_POST['newEstado'];


				$ssql = "SELECT * FROM estados WHERE estado='$estado'";
				$rs = mysql_query($ssql,$conexion);
				if (mysql_num_rows($rs)>0)
				{

				    echo "<div class='noGuardado'>ESTE ESTADO YA SE ENCUENTRA REGISTRADO</div>";

				}else{
					mysql_query ("INSERT INTO estados VALUES (
					  '',	
					  '$codigoPais',
					  '$estado'
					  )");

					echo "<div style='text-align: center; color:green;'>EL NUEVO ESTADO SE HA AÑADIDO CON EXITO</div>";
				}

	}elseif(isset($_POST['guardarIndustria'])){

				$industria = $_POST['newIndustria'];
				$codigoIndustria = $_POST['newCodigoIndustria'];

				$ssql = "SELECT * FROM industrias WHERE industria='$industria' OR codigo='$codigoIndustria'";
				$rs = mysql_query($ssql,$conexion);
				if (mysql_num_rows($rs)>0)
				{

				    echo "<div class='noGuardado'>ESTA INDUSTRIA O CODIGO YA SE ENCUENTRA REGISTRADO</div>";

				}else{
					mysql_query ("INSERT INTO industrias VALUES (
					  '$codigoIndustria',
					  '$industria'
					  )");

					echo "<div style='text-align: center; color:green;'>LA NEUVA INDUSTRIA SE HA AÑADIDO CON EXITO</div>";
				}

	}elseif(isset($_POST['guardarLinea'])){

				$codigoIndustria = $_POST['industria'];
				$lineaNegocio = $_POST['newLinea'];


				$ssql = "SELECT * FROM linea_negocio WHERE lineaNegocio='$lineaNegocio'";
				$rs = mysql_query($ssql,$conexion);
				if (mysql_num_rows($rs)>0)
				{

				    echo "<div class='noGuardado'>LINEA DE NEGOCIOS YA SE ENCUENTRA REGISTRADO</div>";

				}else{
					mysql_query ("INSERT INTO linea_negocio VALUES (
					  '',	
					  '$codigoIndustria',
					  '$lineaNegocio'
					  )");

					echo "<div style='text-align: center; color:green;'>EL NUEVO ESTADO SE HA AÑADIDO CON EXITO</div>";
				}

	}
?>


















<br>
<div id="according">




	<div id="elemento1Arcorderon">
			<div class="panel">
			<div class="panel-heading">Agregar Paises y Estados</div>
			<div class="panel-body">
	          <form method="post" action="#">
	            <input type="submit" name="aggPais" value="Agregar Pais">
	            <input type="submit" name="aggEstado" value="Agregar Estado">
	          </form>
	         
	          <div>
	          	<?php
	          		if(isset($_POST['aggPais'])){

	          			?>
	          			<br><br>
	          			 <form method="post" action="#">
	          			 	<spam>Ingrese el Nuevo Pais:</spam>
	          			 	<input type="text" name="newPais" required>
	          			 	<spam>Ingrese el Codgo del Pais:</spam>
	          			 	<input type="text" name="newCodigoPais" onKeyUp="this.value=this.value.toUpperCase();" maxlength="2" size="2" required>
	          			 	<input type="submit" name="guardarPais" value="Añadir Pais">	          			 	
	          			 </form>
	          			<?php


	          		}else if(isset($_POST['aggEstado'])){

	          			?>
	          			<br><br>
	          			 <form method="post" action="#">
	          			 	<spam>Pais</spam>
	          			 	
	          			 	<select name="pais" id="pais">
				                  <option value='0'>Selecionar...</option>
				                  <?php

				                  # llenamos los valores del pais de la base de datos
				                  $sql="SELECT * FROM paises ORDER BY pais";
				                  foreach($dbh->query($sql) as $row)
				                  {
				                      echo "<option value='".$row["codigo"]."'>".$row["pais"]."</option>";
				                  }
				                  ?>
							</select>

	          			 	<spam>Ingrese el Nuevo Estado:</spam>
	          			 	<input type="text" name="newEstado" required>
	          			 	<input type="submit" name="guardarEstado" value="Añadir Estado">
	          			 </form>
	          			<?php

	          		}
	          	?>
	          </div>

			</div>
		</div>
	</div><!--FIn del arcroderon 1-->





<div id="elemento2Arcorderon">
  <div class="panel">
    <div class="panel-heading">Agregar Industrias y Lineas de Negocio</div>
    <div class="panel-body">
      <form method="post" action="#">
        <input type="submit" name="aggIndustria" value="Agregar Industria">
        <input type="submit" name="aggLineaNegocio" value="Agregar Linea de Negocio">
      </form>

      <div>
	          	<?php
	          		if(isset($_POST['aggIndustria'])){

	          			?>
	          			<br><br>
	          			 <form method="post" action="#">
	          			 	<spam>Ingrese la nueva Industria:</spam>
	          			 	<input type="text" name="newIndustria">
	          			 	<spam>Ingrese el Codgo de la Industria:</spam>
	          			 	<input type="text" name="newCodigoIndustria" maxlength="2" size="2" onKeyUp="this.value=this.value.toUpperCase();">
	          			 	<input type="submit" name="guardarIndustria" value="Añadir Industria">
	          			 </form>
	          			<?php


	          		}else if(isset($_POST['aggLineaNegocio'])){

	          			?>
	          			<br><br>
	          			 <form method="post" action="#">
	          			 	<spam>Industria</spam>
	          			 	<select name="industria" id="industria">
				                  <option value='0'>Selecionar...</option>
				                  <?php

				                  # llenamos los valores del pais de la base de datos
				                  $sql="SELECT * FROM industrias ORDER BY industria";
				                  foreach($dbh->query($sql) as $row)
				                  {
				                      echo "<option value='".$row["codigo"]."'>".$row["industria"]."</option>";
				                  }
				                  ?>
							</select>
	          			 	<spam>Ingrese la nueva Linea de Negocio:</spam>
	          			 	<input type="text" name="newLinea">
	          			 	<input type="submit" name="guardarLinea" value="Añadir Linea de Negocio">
	          			 </form>
	          			<?php

	          		}
	          	?>
	          </div>


    </div>
    </div>
</div><!--FIn del arcroderon 2-->



	


</div><!--FIn div  according-->

<?php

}else{
  header("location:index.php");
}

?>


</body>
</html>
