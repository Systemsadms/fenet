<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    

<script>
function validarFormulario(){

    var txtNombre   = document.getElementById('nombre').value;
    var txtApellido = document.getElementById('apellido').value;
    var txtEmail    = document.getElementById('email').value;
    var txtPass     = document.getElementById('pass').value;
    var txtTelefono = document.getElementById('telefono').value;
    var terminos    = document.getElementById("terminos").checked;

    //Test campo obligatorio
    if(txtNombre == null || txtNombre.length == 0){
      var confirmar = document.getElementById('nombreCampo');
      confirmar.innerHTML = "*Este Campo Es Obligatorio*";
      return false;
    }

    //Test campo obligatorio
    else if(txtApellido == null || txtApellido.length == 0){
      var confirmar2 = document.getElementById('apellidoCampo');
      confirmar2.innerHTML = "*Este Campo Es Obligatorio*";
      return false;
    }

    //Test campo obligatorio
    else if(txtEmail == null || txtEmail.length == 0){
      var confirmar3 = document.getElementById('emailCampo');
      confirmar3.innerHTML = "*Este Campo Es Obligatorio*";
      return false;
    }

    //Test campo obligatorio
    else if(txtPass == null || txtPass.length == 0){
      var confirmar4 = document.getElementById('passCampo');
      confirmar4.innerHTML = "*Este Campo Es Obligatorio*";
      return false;
    }

    //Test campo obligatorio
    else if(txtTelefono == null || txtTelefono.length == 0){
      var confirmar5 = document.getElementById('telefonoCampo');
      confirmar5.innerHTML = "*Este Campo Es Obligatorio*";
      return false;
    }

    //Terminos obligatorio
    else if (terminos == false){
      var confirmar6 = document.getElementById('terminosCampo');
      confirmar6.innerHTML = "*Acepte los terminos y condiciones del servicio*";
      return false;
    }
    

return true;
 }

</script>












    <style>
    .inputEstilo{
      background-color: #f2f2f2;
      width: 250px;
      height: 30px;
      border: #c4c4c4 solid 1px;
      margin-top: 0px;
      font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    }

    .spamEstilo{
      color: red; 
      font-size: 13px;
    }

    header{
      width: 382px; height:auto; 
      background-color: white; 
      margin: 0 auto; 
      border-top-right-radius:30px;
      border-top-left-radius:30px;  
      border-top:3px solid black; 
      border-right:3px solid black; 
      border-left:3px solid black;}

    section{
      width: 382px; 
      height:auto; background-color: 
      white; margin: 0 auto; 
      border-bottom-left-radius:30px;
      border-bottom-right-radius:30px; 
      border-right:3px solid black;
      border-left:3px solid black;
      border-bottom: 3px solid black;}

    @media (max-width:800px){

    header{width: 100%;}

    section{width: 100%;}

    } 
    </style>

    <title>Fe at Network!</title>
  </head>
<body style=" background-color: #003e63;">



<header>


  <nav class="navbar navbar-dark bg-dark" style="border-top-right-radius:25px; border-top-left-radius: 25px;">
    <a class="navbar-brand" href="../index.php">
      <img src="img/fenetalone.png" width="100" height="40" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro1.php">Crear Cuenta</a>
      </li>
    </ul>
  </div>
</nav>

</header>





<section>

<div style="width: 260px; height: auto; background-color: none; margin: 0 auto; padding-top: 50px;">

    <div style="width: 100%; text-align: center; margin-bottom: 50px;">REGISTRATE</div>


    <form action="#" method="post" onsubmit="return validarFormulario()">

         <input type="hidden" name="servicio" value="<?php echo $servicio    = $_POST['servicio'];  ?>">

         <input type="hidden" name="descripcion" value="<?php echo $descripcion    = $_POST['descripcion'];  ?>">

         <input type="hidden" name="tipodeServicio" value="<?php echo $tipodeServicio    = $_POST['tipodeServicio'];  ?>">

         <input type="hidden" name="pais" value="<?php echo $pais    = $_POST['pais']; ?>">

         <input type="hidden" name="ciudad" value="<?php echo $ciudad    = $_POST['ciudad']; ?>">

         <input type="hidden" name="direccionServ" value="<?php echo $direccionServ    = $_POST['direccionServ']; ?>">

         <input type="hidden" name="fecha" value="<?php echo $fecha    = $_POST['fecha']; ?>">

         <input type="hidden" name="hora" value="<?php echo $hora    = $_POST['hora']; ?>">

         <input type="hidden" name="estado" value="<?php echo $estado    = $_POST['estado']; ?>">

         <br>

        <label style="color: gray; ">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="inputEstilo"/><br><span id="nombreCampo" class="spamEstilo"></span>
        <br>
        <label style="color: gray;">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="inputEstilo"/><br><span id="apellidoCampo" class="spamEstilo"></span>
        <br>
        <label style="color: gray;">Correo Electronico</label>
        <input type="text" id="email" name="email" class="inputEstilo"/><br><span id="emailCampo" class="spamEstilo"></span>
        <br>
        <label style="color: gray;">Llave o Contraseña</label>
        <input type="text" id="pass" name="pass" class="inputEstilo"/><br><span id="passCampo" class="spamEstilo"></span>
        <br>
        <label style="color: gray;">Telefono</label>
        <input type="text" id="telefono" name="telefono" class="inputEstilo"/><br><span id="telefonoCampo" class="spamEstilo"></span>
        <br>
        <label style="color: gray;">Pais</label>
        <select name="pais" style="
                              background-color: #f2f2f2;
                              width: 100px;
                              height: 20px;
                              border: #c4c4c4 solid 1px;
                              font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                              "/>
                          <option>Venezuela</option>
                          </select>
        <br><br>
        <label style="color: gray;">Estado</label>
         <select name="estado" style="
                              background-color: #f2f2f2;
                              width: 90px;
                              height: 20px;
                              border: #c4c4c4 solid 1px;
                              font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
                              "/>
                          <option >Amazonas</option>
                          <option >Anzoategui</option>
                          <option >Apure</option>
                          <option >Aragua</option>
                          <option >Barinas</option>
                          <option >Bolivar</option>
                          <option >Carabobo</option>
                          <option >Cojedes</option>
                          <option >Delta Amacuro</option>
                          <option >Distrito Capital</option>
                          <option >Falcon</option>
                          <option >Guarico</option>
                          <option >Lara</option>
                          <option >Merida</option>
                          <option >Miranda</option>
                          <option >Monagas</option>
                          <option >Nueva Esparta</option>
                          <option >Portuguesa</option>
                          <option >Sucre</option>
                          <option >Tachira</option>
                          <option >Trujillo</option>
                          <option >Vargas</option>
                          <option >Yaracuy</option>
                          <option >Zulia</option>
                          </select>
<br><br>


    
    <label><a href="http://fenet.com.ve/terminosyCondiciones.pdf" target="_blank">Terminos y Condiciones de Servicio</a></label><br>
    <div style="background-color: gray; padding: 5px; border-radius: 5px;">
    <input  type="checkbox" id="terminos" name="terminos" value="terminos"> He leido y comprendido los terminos y condiciones de servicios
    </div>
    <span id="terminosCampo" class="spamEstilo"></span>
        <input name="registrar" type="submit" value="Submit" style="
      background-color: #c4c4c4;
      width: 250px;
      height: 30px;
      border: #f2f2f2 solid 1px;
      margin-top: 30px;
      margin-bottom: 60px;
      cursor: pointer;
    ">

    </form>

</div>    














<?php 


if(isset($_POST['registrar'])){

include ("cnx.php");


            $nombre     = $_POST['nombre'];
            $apellido   = $_POST['apellido'];
            $nick       = $_POST['email'];
            $telefono   = $_POST['telefono'];
            $direccion  = "";
            $pais       = $_POST['pais'];
            $estado     = $_POST['estado'];
            $ciudad     = "";
            $pass       = $_POST['pass'];






                                $servicio        = $_POST['servicio'];
                                $descripcion     = $_POST['descripcion'];
                                $tipodeServicio  = $_POST['tipodeServicio'];
                                $pais            = $_POST['pais'];
                                $ciudadServ      = $_POST['ciudad'];
                                $estado          = $_POST['estado'];
                                $direccionServ   = $_POST['direccionServ'];
                                $fecha           = $_POST['fecha'];
                                $hora            = $_POST['hora'];



              mysql_query ("INSERT INTO usuario VALUES ('','$nombre','$apellido','$nick','$pass','$telefono','$direccion','cliente','$pais','$estado','$ciudad')");

                // $conexion=mysql_connect("localhost","root","");
                //$baseDeDatos=mysql_select_db("fenet",$conexion);

                $rs = mysql_query("SELECT MAX(id) AS id FROM usuario");
                if ($row = mysql_fetch_row($rs)) {
                $id = trim($row[0]);
                }


                 mysql_query ("INSERT INTO servicio VALUES ('','$servicio','$tipodeServicio','$descripcion','$direccionServ','$ciudadServ','$estado','$pais','$fecha','$hora','fenet','$id','solicitado')");

}

?>


</section>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
