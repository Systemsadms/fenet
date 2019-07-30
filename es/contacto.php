<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/mediastyleMenu.css">


<style type="text/css">
  .divDato{
    width: 300px; 
    display: 
    inline-block; 
    margin-top: 20px;
    text-align: left;
  }

#registroWrapper{
  width: 95%;
  background-color: #F5F5F5;
  margin: 0 auto;
  box-sizing: border-box;
  padding-top: 1px;
  padding-bottom: 50px;

}
#tituloRegistro{
  width: 95%;  
  margin:0 auto;
  margin-top: 20px;
  background-color:#53B567;
  color: white;
  box-sizing: border-box;
  text-align: center;
}

#infoContact{
  width: 95%;  
  margin:0 auto;
  margin-top: 5px;
  background-color: white;
  box-sizing: border-box;
  padding-top: 20px;
  padding-bottom: 20px;
}

#boxLeft{
  background-color: none;
  width: 400px;
  display: inline-block;
}

#boxRight{
  background-color: none;
  width: 400px;
  display: inline-block;
  vertical-align: top;
}

.inputMargin{
  margin-top: 10px;
}

.input_text{
  width: 224px;
  height: 29px;
  border-radius: 5px;
  border:1px solid #dddddd;
}
.list-box{
  width: 150px;
  height: 29px;
  border-radius: 5px;
  border:1px solid #dddddd;
}
.btn-registro{
  width: 150px;
  height: 29px;
  border-radius: 5px;
  border:0;
  background-color:#53B567;
  color: white;
  cursor: pointer;
}

#div-boton{
  width: 95%;  
  margin:0 auto;
  margin-top: 20px;
  box-sizing: border-box;
  text-align: center;
}
</style>
</head>



<body>

  	<nav>
   <a href="index.html"> <div id="logo"><img src="img/logo3.png" height="70px;"></div></a>

    
      <ul id="opciones">
        <li id="item"><a href="#conocenos" style="color: #003e63">Conocenos</a></li>
        <li id="item"><a href="#proveedor" style="color: #003e63">Proveedores</a></li>
        <li id="item"><a href="#escribenos" style="color: #003e63">Contactanos</a></li>
        <li id="item"><a href="#conocenos" style="color: #003e63">Crear Cuenta</a></li>
        <a href="app/index.php"><li id="item" class="iniciarSeccion">Iniciar Seccion</li></a>
      </ul>

    <a href="#"><div id="iconSmart" id="iconSmart"><img src="img/menu.png" height="35px;"></div></a>
  </nav>


  <div id="menuSmart">
    
    <a href="#conocenos2"><div>Conocenos</div></a>
    <hr>
    <a href="#proveedor"><div>Proveedor</div></a>
    <hr>
    <a href="#escribenos"><div>Contactanos</div></a>
    <hr>
    <a href="#conocenos2"><div>Crear Cuenta</div></a>
    <hr>
    <a href="app/index.php"><a href="#"><div>Iniciar Seccion</div></a></a>
    <hr>
  </div>





















<?php
//-----------------------Carga de Contacto-------------------------//


if(isset($_POST['guardarContacto'])){

  include ("../datafe/model/cnx2.php");

 date_default_timezone_set('America/Caracas');
 $cont_dateadded =date('Y-m-d G:i:s');
 $cont_addedby ="userWeb";
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






$ssql = "SELECT * FROM dataset_contactos WHERE cont_emailEmpresa='$cont_emailEmpresa' AND cont_enterprisephone='$cont_enterprisephone' OR cont_enterprisephone='$cont_enterprisephone'";
$rs = mysql_query($ssql,$conexion);
if (mysql_num_rows($rs)>0)
{

    echo "<div class='noGuardado' style='text-align:center;'><h2><font color='red'>El contacto que intenta registrar ya esta registrado</font></h2></div>";
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

    echo "<div class='guardado' style='text-align:center;'><h2><font color='green'>Se ha registrado con exito</font></h2></div>";

    
  }

}

?>















<div style="padding-top:150px; text-align: center;">
    Registro Proveedor FENET
</div>






















<br><br><br>
<div id="registroWrapper">
<form method="post" action="#" >
  <div id="tituloRegistro">
    Informacion de Contacto
  </div>
  <div id="infoContact">




    <div id="boxLeft">
      <div class="inputMargin">
        <spam>Nombre:</spam>
        <input type="text" name="nombre" class="input_text">
      </div>
      <div class="inputMargin">
        <spam>Apellido:</spam>
        <input type="text" name="apellido" class="input_text">
      </div>
      <div class="inputMargin">
        <spam>Cumpleaños:</spam>
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
      </div>
      <div class="inputMargin">
        <spam>Genero:</spam>
        <select name="genero" class="list-box">
          <option value="none" selected></option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
        </select>
      </div>
    </div><!--Fin box left-->







    <div id="boxRight">
      <div class="inputMargin">
          <spam>Posicion:</spam>
          <input type="text" name="posicion" class="input_text">
      </div>
      <div class="inputMargin">
          <spam>Correo electronico:</spam>
          <input type="text" name="email" class="input_text">
      </div>
      <div class="inputMargin">
          <spam>Tel. Trabajo:</spam>
          <input type="text" name="telefonoTrabajo" class="input_text">
      </div>
      <div class="inputMargin">
          <spam>Tel. Movil:</spam>
          <input type="text" name="telefonoMovil" class="input_text">
      </div>
    </div><!--Fin box Right-->
  </div>

















   <div id="tituloRegistro">
    Informacion de Coporativa
  </div>
  <div id="infoContact">
    <div id="boxLeft">
    <div class="inputMargin">
      <spam>Empresa:</spam>
      <input type="text" name="empresa" class="input_text">
    </div>
    <div class="inputMargin">
      <spam>Fundada:</spam>
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
    </div>
    <div class="inputMargin">
      <spam>Email:</spam>
      <input type="text" name="emailEmpresa1" class="input_text">
    </div>
    <div class="inputMargin">
      <spam>Email 2:</spam>
      <input type="text" name="emailEmpresa2" class="input_text">
    </div>
    <div class="inputMargin">
        <spam>Telefono:</spam>
        <input type="text" name="telefonoEmpresa1" class="input_text">
    </div>
    <div class="inputMargin">
        <spam>Telefono 2:</spam>
        <input type="text" name="telefonoEmpresa2" class="input_text">
    </div>
    <div class="inputMargin">
        <spam>WebSite:</spam>
        <input type="text" name="website" class="input_text">
    </div>
    <div class="inputMargin">
        <spam>WebSite 2:</spam>
        <input type="text" name="website2" class="input_text">
    </div>
  </div><!--Box Left -->


  <div id="boxRight">
    <div class="inputMargin">
      <spam>Pais:</spam>
              <select name="pais" id="pais" class="list-box">
                          <option value='0'>Selecionar...</option>
                          <?php
                          include("../datafe/model/selects_db.php");

                          # llenamos los valores del pais de la base de datos
                          $sql="SELECT * FROM paises ORDER BY pais";
                          foreach($dbh->query($sql) as $row)
                          {
                              echo "<option value='".$row["codigo"]."'>".$row["pais"]."</option>";
                          }
                          ?>
              </select>
    </div>
    <div class="inputMargin">
        <spam>Estado:</spam>  
        <input type="text" name="estado" class="input_text">
    </div>
    <div class="inputMargin">
        <spam>Ciudad:</spam>
        <input type="text" name="ciudad" class="input_text">
    </div>
    <div class="inputMargin">
        <spam>Direccion:</spam>
        <input type="text" name="direccion" class="input_text">
    </div>
    <div class="inputMargin">
      <spam>Codigo Postal:</spam>
      <input type="text" name="zip" class="input_text">
    </div>
    <div class="inputMargin">
      <spam>Rif/Nit:</spam>
      <input type="text" name="rif" class="input_text">
    </div>
    <div class="inputMargin">
      <spam>Descripcion:</spam><br>
      <textarea name="descripcion" rows="4" cols="33"></textarea>
    </div>
  </div><!--BoxRight-->
</div><!--Informacion corportiva-->













   <div id="tituloRegistro">
    Modelo de Negocio
  </div>
  <div id="infoContact">
    <div id="boxLeft">
      <div class="inputMargin">
        <spam>Ejecutivo:</spam>
        <input type="text" name="ejecutivo" class="input_text">
      </div>
      <div class="inputMargin">
        <spam>Industria:</spam>
                <select name="industrias" id="industrias" class="list-box">
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
      </div>
      <div class="inputMargin">
        <spam>Linea de Negocio:</spam>
                <select name="lineaNegocios" id="lineaNegocio" disabled>
                </select>
      </div>
      <div class="inputMargin">
        <spam>Tipo:</spam>
                        <select name="tipo" class="list-box">
                          <option></option>
                          <option value="proveedor">Proveedor</option>
                          <option value="distribuidor">Distribuidor</option>
                          <option value="tienda">Tienda</option>
                          <option value="proveedor, distribuidor">Proveedor/Distribuidor</option>
                          <option value="proveedor, tienda">Proveedor/Tienda</option>
                          <option value="distribuidor, tienda">Distribuidor/Tienda</option>              
                        </select>
      </div>
    </div><!--Box Left-->
    <div id="boxRight">
      <div class="inputMargin">
      <spam>Servicios:</spam>
    <input type="text" name="servicios" class="input_text">
  </div>
  <div class="inputMargin">
    <spam>Productos:</spam>
    <input type="text" name="productos" class="input_text">
  </div>
   <div class="inputMargin">
    <spam>N° Empleados:</spam>
    <input type="text" name="empleados" class="input_text">
  </div>
  <div class="inputMargin">
    <spam>Vol. Ventas:</spam>
    <input type="text" name="volumenVentas" class="input_text">
  </div>
    </div><!--BoxRight-->
  </div><!--Fin modelo de negocio box-->

<div id="div-boton">
    <input style ="width: 200px;" type="submit" name="guardarContacto" value="Registrar Contacto" class="btn-registro">
  </div>

</form>
</div><!--Fin ristroWrapper-->

<br><br><br>































</body>



<!--

<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
-->



<script type="text/javascript">
$(function(){

//var ventana_ancho = $(window).width();
//$("#tamano").text(ventana_ancho);


  $("#iconSmart").click(function () {

   var menuSmartDisplay = $("#menuSmart").css("display");

    if (menuSmartDisplay == "none"){
      $("#menuSmart").css("display", "block");      
    }else if (menuSmartDisplay == "block"){
      $("#menuSmart").css("display", "none");
    }
    
   });
  });
</script>
</html>