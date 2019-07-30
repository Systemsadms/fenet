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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>

    <style>
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

    .asesor{width: 100%; height: 60px; margin-top: 80px; background-color: green; border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; font-size: 20px; color: white; padding-top: 15px; text-align: center; cursor: pointer;}
    .asesor:hover{background-color:#006837; }

    .servicio{background-color: #00A1B5; width: 250px; height: 60px; border: #f2f2f2 solid 1px; margin-top: 20px; cursor: pointer; display: inline-block;}

    .servicios{
      margin-top: 20px;
      background-color: #00A1B5;
      width: 250px;
      height: 60px;
      border: #f2f2f2 solid 1px;
      cursor: pointer;
      margin-left: -40px;

    }

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
            <a class="nav-link" href="../index.php">Home</a>
      </li>
    </ul>
  </div>
</nav>


</header>


<section>


  <br>

<form action="descripcionIndex.php" method="post" style="text-align: center;">

        <div ng-app="myApp" ng-controller="namesCtrl">

        <p><input type="text" ng-model="test" placeholder="Search Service..."></p>

            <ul>
              <li style=" list-style: none;"  ng-repeat="x in names | filter : test">
                <input type="submit" class="servicios" value="{{ x }}" name="servicio">
              </li>
            </ul>

        </div>
</form>


<div style="background-color: #E6E6E6;">
       <div style="background-color: none; width: 100%; margin-top: 70px; text-align: center;">
          <br>
            <p><b>If you did not get the service you were looking for</b></p>

      </div>

      <br>

      <div style="background-color: none; width: 100%; text-align: center;" >
        <form method="post" action="#">

          <label>what is the service you are looking for?</label>

        <input type="text" name="servicio" style="background-color: #f2f2f2; border:solid 1px #D8D8D8; height: 25px;" >
        <br><br>
        <label>Name and surname:</label>
        <br>
        <input type="text" name="nombre" style="background-color: #f2f2f2; border:solid 1px #D8D8D8; height: 25px;" >
        <br><br>
        <label>Contact number:</label>
        <br>
        <input type="text" name="telefono" style="background-color: #f2f2f2; border:solid 1px #D8D8D8; height: 25px;" >
        <br><br>
         <input type="submit" name="postular" value="Send request" style=" width: 140px; height: 30px; background-color: #999;" >
      </form>
      <br>
     </div>
</div>

        <?php
       // $email= $_SESSION['login'];

       // $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
      //  $tipoUsuario = mysql_result($ssql,0,"tipoUsuario");
      //  $nombre   = mysql_result($ssql,0,"nombre");
       // $apellido = mysql_result($ssql,0,"apellido");
       // $telefono = mysql_result($ssql,0,"telefono");

          if (isset($_POST['postular']))
          {
                $to       =   "appfenet@gmail.com";
                //$subject  =   $_POST['asunto'];
                $subject  =   "Postulacion de Servicio";
                //$from     =   $_POST['from'];
                $from     =   $email;
                $headers  =   "From:" . $from;
                //$message  =   $_POST['mensaje'];
                $message  =  "El Servicio Solicitado es: "

                . $_POST['servicio'].

                "//Usuario:"

                . $nombre."".$apellido.

                "//Telefono:"

                . $telefono.

                "//Email:"

                . $email


                ;
                mail($to,$subject,$message,$headers);


              ?>
                  <script type="text/javascript">
                   alert ("La solicitud para agregar el servicio fue enviada. Pronto un Asesor se contactara con usted para informarle de la gestion");
                  </script>
              <?php

            }
        ?>


<a href="asesor.php"><div class="asesor">Contactar Asesor</div></a>

</section>







<script>
angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.names = [
        'COMPUTING',
        'PURCHASES',
        'SALES',
        'CUSTOMS',
        'WAREHOUSE',
        'LOGISTICS',
        'TAXIS',
        'DELIVERY',
        'LEGAL PROCEDURES',
        'SMITHY',
        'PLUMBING',
        'MASONRY',
        'REFRIGERATION',
        'TELEPHONY',
        'MECHANICS'
    ];
});

/*

        'GRUAS',
        'SEGURIDAD',
        'AGENCIA DE VIAJES',
        'FESTEJOS',
        'ENTRETENIMIENTO',
        'ELECTRICISTA',
        'GEOLOGIA',
        'MAMPOSTERIA',
        'CARPINTERIA',
        'DISEÑO GRAFICO',
        'LATONERIA',
        'PINTURA',
*/
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
