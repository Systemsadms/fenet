<?php
  session_start();
  if ($_SESSION['login']){
      include ("cnx.php");          
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">
    <style>
    header{width: 382px; height:auto; background-color: white; margin: 0 auto; border-top-right-radius:30px; border-top-left-radius:30px; border-top:3px solid black; border-right:3px solid black; border-left:3px solid black;}
    section{
      width: 382px; 
      min-height: 533px;
      background-color: white; 
      margin: 0 auto; 
      border-right: 3px solid black;
      border-left:3px solid black;
    }


    .asesor{
      width: 382px; 
      height: 60px; 
      margin: 0 auto; 
      background-color: green; 
      border-bottom-right-radius: 25px; 
      border-bottom-left-radius: 25px; 
      border-right:3px solid black;
      border-left:3px solid black;
      border-bottom: 3px solid black;
      font-size: 20px; 
      color: white; 
      padding-top: 15px; 
      text-align: center; 
      cursor: pointer;}

    .asesor:hover{background-color:#006837; }

    .btn_aceptar{
        height: 30px;
        width: 250px;
        background-color: #00A1B5;
        margin: 0 auto;
        text-align: center;
        color: white;
    }

    @media (max-width:800px){

    header{width: 100%;}

    section{width: 100%;}

    .asesor{width: 100%;}
    </style>
    <title>Fe at Network!</title>
  </head>
  <body style=" background-color: #003e63;">
<header>
<?php
    include ("menu.php");
?>
</header>
<section>
<div style="background-color: none; width: 100%; height: 60px; text-align: right; padding-top: 10px; padding-right: 10px;"><a href="listaServicios.php"><img src="img/flechave.jpg" height="50"></a></div>    

<div id="ocultador" style="background-color: white; opacity: 0.5; display: none; width: 285px; height: 50px; position: fixed; top: 156px; left: 50%; z-index: 200; margin-left: -182px;"></div>
<?php
$ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");           
$idUsuario  =  mysql_result($ssql,0,"id");
$servicio    = $_POST['servicio'];
$proveedor    = $_POST['proveedor'];
$email = $_SESSION['login'];
/*
  $ssql = mysql_query("SELECT * FROM seguimientos WHERE  cliente='$idUsuario' and servicio='$servicio'");           
  $seguimientos  =  mysql_result($ssql,0,"seguimiento");
  echo $seguimiento = $seguimientos+1; 
  */ 
 ?>


<div style="padding-top: 50px;"></div>
    <p style="width: 100%; text-align: center; margin-bottom: 20px;"><b>Califica el Servicio</b></p>



          <div style=" background-color: none; margin-top: 50px; text-align: center;">

            <form method="post" action="servicioConcluido.php">
              <textarea name="experiencia" style="width: 80%; height: 100px;" placeholder="Cuentanos tu experiencia con el servicio o dejanos un comentario..."></textarea>
              <br><br>
              <input type="hidden" name="proveedor2" value="<?php echo $_POST['proveedor']; ?>"/>
              <input type="hidden" name="servicio2" value="<?php echo $_POST['servicio']; ?>"/>

              <div style="display: inline-block; background-color: none; margin-right: 20px;"><input type="image" name="positivo" src="img/positivo.jpg" width="50px" />   </div>

              <div style="display: inline-block; background-color: none"><input type="image" name="negativo" src="img/negativo.jpg" width="50px"/></div>
            </form>
        
     
          </div>



</section>
<a href="asesor.php"><div class="asesor">Contactar Asesor</div></a>


    <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script-->
	<script src="https://code.jquery.com/jquery-1.8.3.min.js" integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  
  </body>
</html>
<?php
}else{
  header("location:index.php");
}
?>