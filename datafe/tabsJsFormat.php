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
			<form method="post" action="#">
				<div id="box-wrapper">
					Formulario
				</div><!--Fin box wrapper-->
			</form>
    	</div><!--FIN ELEMENTO ARORDEON 1-->



























		<div id="elemento2Arcorderon" class="hidden">
			Tab2 
		</div><!--FIN DE LA INFORMACION CORPORATIVA-->

























		<div id="elemento3Arcorderon" class="hidden">
			Tab3
		</div><!--FIN DE LA INFORMACION DE NEGOCIOS-->













	</div>
	</div>






</body>
</html>
