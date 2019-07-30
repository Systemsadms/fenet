<?php

  session_start();
  if ($_SESSION['login'])
    {

    	require("model/cnx2.php");
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


<!--
  <script src="http://code.jquery.com/jquery-latest.js"></script>
-->
  <script type="text/javascript" src="selectsIndustria.js"></script>
  <script type="text/javascript" src="selectsPaises.js"></script>


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
     	alert ("funciona dato2");
     });
     $("#Dato3").click(function(e){
     	alert ("funciona dato3");
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


















<?php
//-----------------------Carga de Contacto-------------------------//


if(isset($_POST['guardarContacto'])){

 date_default_timezone_set('America/Caracas');
 $cont_dateadded =date('Y-m-d G:i:s');
 $cont_addedby =$_SESSION['login'];
 $cont_updatedby ="";
 $cont_lastupdate ="";
 $cont_firstname =$_POST['nombre'];
 $cont_lastname1 =$_POST['apellido'];
 $cont_birthday =$_POST['yearBirthday']."-".$_POST['monthBirthday']."-".$_POST['dayBirthday'];
 $cont_jobtitle =$_POST['posicion'];
 $cont_email =$_POST['email'];
 $cont_companyname =$_POST['empresa'];
 $cont_emailEmpresa = $_POST['emailEmpresa1'];
 $cont_emailEmpresa2 = $_POST['emailEmpresa2'];
 $cont_workphone =$_POST['telefonoTrabajo'];
 $cont_cellphone =$_POST['telefonoMovil'];
 $cont_enterprisephone =$_POST['telefonoEmpresa1'];
 $cont_enterprisephone2 =$_POST['telefonoEmpresa2'];


 $paisCode =$_POST['pais'];
 $ssql = mysql_query("SELECT * FROM paises WHERE codigo='$paisCode'");
 $country = mysql_result($ssql,0,"pais");
 $cont_country =$country;
 


 $cont_state =$_POST['estado'];
 $cont_city =$_POST['ciudad'];
 $cont_addressline1 =$_POST['direccion'];
 $cont_zip =$_POST['zip'];
 $cont_rif =$_POST['rif'];
 $cont_descripcion =$_POST['descripcion'];
 $cont_aniversario = $_POST['yearAniversary']."-".$_POST['monthAniversary']."-".$_POST['dayAniversary'];
 $cont_genero = $_POST['genero'];
 $cont_ejecutivo = $_POST['ejecutivo'];



 $insdustriaCode =$_POST['industrias'];
 $ssql = mysql_query("SELECT * FROM industrias WHERE codigo='$insdustriaCode'");
 $industria = mysql_result($ssql,0,"industria");
 $cont_insdustria =$industria;


 $cont_lineaNegocios = $_POST['lineaNegocios'];
 $cont_servicios =$_POST['servicios'];
 $cont_productos =$_POST['productos'];
 $cont_employees =$_POST['empleados'];
 $cont_sale_volume =$_POST['volumenVentas'];
 $cont_website1 =$_POST['website'];
 $cont_website2 =$_POST['website2'];
 $cont_tipo =$_POST['tipo'];
 $cont_estado ='contacto';


include ("model/cnx2.php");



$ssql = "SELECT * FROM dataset_contactos WHERE cont_emailEmpresa='$cont_emailEmpresa' AND cont_enterprisephone='$cont_enterprisephone' OR cont_enterprisephone='$cont_enterprisephone'";
$rs = mysql_query($ssql,$conexion);
if (mysql_num_rows($rs)>0)
{

    echo "<div class='noGuardado'>El contacto que intenta registrar ya esta registrado</div>";
}else{



mysql_query ("INSERT INTO dataset_contactos VALUES (
	'',
  '$cont_dateadded',
	'$cont_addedby',
	'$cont_updatedby',
  '$cont_lastupdate',
  '$cont_firstname',
  '$cont_lastname1',
  '$cont_birthday',
  '$cont_jobtitle',
  '$cont_email',
  '$cont_companyname',
  '$cont_emailEmpresa',
  '$cont_emailEmpresa2',
  '$cont_workphone',
  '$cont_cellphone',
  '$cont_enterprisephone',
  '$cont_enterprisephone2',
  '$cont_country',
  '$cont_state',
  '$cont_city',
  '$cont_addressline1',
  '$cont_zip',
  '$cont_rif',
  '$cont_descripcion',
  '$cont_aniversario',
  '$cont_genero',
  '$cont_ejecutivo',
  '$cont_insdustria',
  '$cont_lineaNegocios',
  '$cont_productos',
  '$cont_servicios',
  '$cont_employees',
  '$cont_sale_volume',
  '$cont_website1',
  '$cont_website2',
  '$cont_tipo',
  '$cont_estado'
  )");

		echo "<div class='guardado'>El contacto fuer guardado con exito</div>";

	}
}

?>














































<br><br>
<div id="according">
	<div id="headerAcording">
		<div style="width: 200px; display: inline-block;">
			<input type="button" id="Dato1" value="Insertar Nuevo Contacto" class="input_buton" style="width: 200px;">
		</div>
		<div style="width: 230px; display: inline-block;">
			<input type="button" id="Dato2" value="Registro de Ventas" class="input_buton" style="width: 230px;">
		</div>
    <div style="width: 230px; display: inline-block;">
			<input type="button" id="dato3" value="Clientes" class="input_buton" style="width: 230px;">
		</div>
    <div style="width: 230px; display: inline-block;">
			<input type="button" id="dato3" value="Cliente Prospecto" class="input_buton" style="width: 230px;">
		</div>
		<!--
		<div style="width: 200px; display: inline-block;">
			<input type="button" id="Dato3" value="Archivos Importados" class="input_buton" style="width: 200px;">
		</div>
		-->
	</div>

	<div id="elemento1Arcorderon" class="show">
			<div class="panel">
			<div class="panel-heading">Registro de Contacto</div>
			<div class="panel-body">

				<form method="post" action="#">
					<table>

						<tr>
							<td style="text-align: right;">Nombre</td>
							<td><input type="text" name="nombre" class="input_text"></td>
							<td style="text-align: right;">Apellido</td>
							<td><input type="text" name="apellido" class="input_text"></td>
						</tr>

						<tr>
							<td style="text-align: right;">Fecha de Cumpleaños</td>
							<td>
										<select name="dayBirthday">
											<option value="none" selected></option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<select name="monthBirthday">
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
										<select name="yearBirthday">
											<option value="none" selected></option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>
											<option value="1946">1946</option>
											<option value="1945">1945</option>


										</select>
						</td>
							<td style="text-align: right;">Genero</td>
							<td>
							<select name="genero">
									<option value="none" selected></option>
									<option value="masculino">Masculino</option>
									<option value="femenino">Femenino</option>
							</select>
							</td>
						</tr>
						<tr>
							<td style="text-align: right;">Posicion</td>
							<td><input type="text" name="posicion" class="input_text"></td>
							<td style="text-align: right;">Correo Electronico</td>
							<td><input type="text" name="email" class="input_text"></td>
						</tr>
						<tr>
							<td style="text-align: right;">Telefono Trabajo</td>
							<td><input type="text" name="telefonoTrabajo" class="input_text"></td>
							<td style="text-align: right;">Telefono Movil</td>
							<td><input type="text" name="telefonoMovil" class="input_text"></td>
						</tr>
						<tr>
							<td style="text-align: right;">Empresa</td>
							<td><input type="text" name="empresa" class="input_text"></td>
							<td style="text-align: right;">Fundada</td>
							<td>
                <select name="dayAniversary">
                  <option value="none" selected></option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                <select name="monthAniversary">
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
                <select name="yearAniversary">
                  <option value="none" selected></option>
                  <option value="2003">2019</option>
                  <option value="2003">2018</option>
                  <option value="2003">2017</option>
                  <option value="2003">2016</option>
                  <option value="2003">2015</option>
                  <option value="2003">2014</option>
                  <option value="2003">2013</option>
                  <option value="2003">2012</option>
                  <option value="2003">2011</option>
                  <option value="2003">2010</option>
                  <option value="2003">2009</option>
                  <option value="2003">2008</option>
                  <option value="2003">2007</option>
                  <option value="2003">2006</option>
                  <option value="2003">2005</option>
                  <option value="2003">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
</select>


						</td>
						</tr>
            <tr>
              <td style="text-align: right;">Email Empresa1</td>
              <td><input type="text" name="emailEmpresa1" class="input_text"></td>
              <td style="text-align: right;">Email Empresa2</td>
              <td><input type="text" name="emailEmpresa2" class="input_text"></td>
            </tr>
            <tr>
              <td style="text-align: right;">Telefono</td>
              <td><input type="text" name="telefonoEmpresa1" class="input_text"></td>
              <td style="text-align: right;">Telefono2</td>
              <td><input type="text" name="telefonoEmpresa2" class="input_text"></td>
            </tr>
						
						<tr>
							<td style="text-align: right;">Pais</td>
							<td>
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
							</td>
							<td style="text-align: right;">Estado</td>
							<td>
								<select name="estado" id="estado" disabled>
                				</select>
							</td>
						</tr>
						<tr>
              <td style="text-align: right;">Ciudad</td>
							<td><input type="text" name="ciudad" class="input_text"></td>
							<td style="text-align: right;">Direccion</td>
							<td><input type="text" name="direccion" class="input_text"></td>
						</tr>
            <tr>
              <td style="text-align: right;">Codigo Postal</td>
							<td><input type="text" name="zip" class="input_text"></td>
              <td style="text-align: right;">Rif/Nit</td>
							<td><input type="text" name="rif" class="input_text"></td>
						</tr>
            <tr>
              <td style="text-align: right;">Descripcion del Negocio</td>
              <td><textarea name="descripcion" rows="4" cols="33"></textarea></td>
            </tr>
            <tr>
            	
              <td><br></td>

              <td><hr></td>
              <td><hr></td>
          		
            </tr>
            <tr>
              <td style="text-align: right;">Ejecutivo</td>
							<td><input type="text" name="ejecutivo" class="input_text"></td>
							<td style="text-align: right;">Industria</td>
							<td>
                <select name="industrias" id="industrias">
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
              </td>

						</tr>
						<tr>
							<td style="text-align: right;">Linea de Negocio</td>
							<td>
				                <select name="lineaNegocios" id="lineaNegocio" disabled>
				                </select>
				             </td>
				             <td style="text-align: right;">Tipo</td>
							<td>
				                <select name="tipo">
				                	<option></option>
				                	<option value="proveedor">Proveedor</option>
				                	<option value="distribuidor">Distribuidor</option>
				                	<option value="tienda">Tienda</option>
				                	<option value="proveedor, distribuidor">Proveedor/Distribuidor</option>
				                	<option value="proveedor, tienda">Proveedor/Tienda</option>
				                	<option value="distribuidor, tienda">Distribuidor/Tienda</option>	             
				                </select>
				             </td>
						</tr>
						<tr>
              <td style="text-align: right;">Servicios</td>
							<td><input type="text" name="servicios" class="input_text"></td>
							<td style="text-align: right;">Productos</td>
							<td><input type="text" name="productos" class="input_text"></td>
						</tr>
						<tr>
							<td style="text-align: right;">Numero de Empleados</td>
							<td><input type="text" name="empleados" class="input_text"></td>
							<td style="text-align: right;">Volumen de Ventas Anual</td>
							<td><input type="text" name="volumenVentas" class="input_text"></td>
						</tr>
						<tr>
							<td style="text-align: right;">Web Site </td>
							<td><input type="text" name="website" class="input_text"></td>
              <td style="text-align: right;">Web Site2 </td>
							<td><input type="text" name="website2" class="input_text"></td>

						</tr>
					</table>




<br><br><br>
					<div style="text-align: center;"><input style ="width: 200px;" type="submit" name="guardarContacto" value="Registrar Contacto" class="input_buton"></div>






        </form>
			</div>
		</div>
	</div><!--FIn del arcroderon 1-->














































	<div id="elemento2Arcorderon" class="show">
		<div class="panel">
		<div class="panel-heading">Registro de Ventas</div>
		<div class="panel-body">

			





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
								<form action='venta.php' method='post'>
									<input type='hidden' name='idUsuario' value=".$reg[0].">
									<input type='submit' value='Vender' class='input_buton' />
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
								<form action='venta.php' method='post'>
									<input type='hidden' name='idContacto' value=".$reg[0].">
									<input type='submit' value='Vender' class='input_buton' />
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

      

	</div>
	</div>
	</div><!--FIn del arcroderon 2-->



		<!--
		<div id="elemento3Arcorderon" class="hidden">
			<div class="panel">
			<div class="panel-heading">Archivos Importados</div>
			<div class="panel-body">
				Contenido
			</div>
			</div>
		</div><!--FIn del arcroderon 3-->


</div><!--FIn div  according-->





</body>
</html>

<?php

}else{
  header("location:index.php");
}

?>
