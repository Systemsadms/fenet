
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">

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
<body style=" background-color: #549cb4;">



<header>

<?php
/*
    include ("../app/menu.php");
    */
?>
</header>


<section>
<div style="padding-top: 80px;"></div>
<p style="width: 100%; text-align: center; margin-bottom: 50px;"><b>Nuevo Servicio</b></p>      

<br>




<form action="registroUp.php" method="post" id="crearNuevoT" style="background-color: none; height: auto; width: 250px; margin: 0 auto;">

<label style="color: gray; ">Nombre del Servicio</label>
<input  type="text" spellcheck="false" name="nombre" id="nombre" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<span id="nombreD"></span>


<label style="color: gray;">Descripcion del Servicio</label>
<textarea name="descripcion" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 100px;
    border: #c4c4c4 solid 1px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;">
</textarea>




<a href="javascript: validarCampos()" name="enviar" style="

              background-color: gray;
              width: 100px;
              height: 30px;
              border: #f2f2f2 solid 1px;
              margin-top:30px ;
              cursor: pointer;
              display: inline-block;
              color:white;
              font-size: 17px;
              padding-top: 3px;
              text-align: center;
              margin-left: 80px;


              ">Registrar</a>

</form>
     </div>



<br><br>

<form action="#" method="post" style="text-align: center;">

        <div ng-app="myApp" ng-controller="namesCtrl">
          
        <p><input type="text" ng-model="test" placeholder="Buscar Servicio..."></p>

            <ul>
              <li style=" list-style: none;"  ng-repeat="x in names | filter : test">
                <input type="submit" class="servicios" value="{{ x }}" name="servicio">
              </li>
            </ul>

        </div>
</form>

<a href=""><div class="asesor">
  

</div></a>

</section>
    




<script>
    function validarCampos(){

        var text=document.forms['crearNuevoT'].nombre.value.length;
        var text2=document.forms['crearNuevoT'].descripcion.value.length;

        //var text6=document.forms['crearNuevoT'].test.value.length;
        //var text7=document.forms['crearNuevoT'].publicidad.value.length;



        if(text==0) {
            document.forms['crearNuevoT'].nombre.focus();   
            document.getElementById("nombreD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("nombreD").style.color = "red";
            return false;
        }
        else if(text2==0){
            document.forms['crearNuevoT'].descripcion.focus();   
            document.getElementById("emailD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("emailD").style.color = "red";
            return false;
        }
        else
        {
            document.forms['crearNuevoT'].submit();
        }

    }
</script>



<script>
angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.names = [
        'COMPRAS',
        'TRAMITES LEGALES',
        'COMPUTACION',
        'ELECTRONICA',
        'MECANICA',
        'TRANSPORTE',
        'GRUAS',
        'SEGURIDAD',
        'ADUANAS',
        'DELIVERY',
        'LOGISTICA',
        'ALMACEN',
        'AGENCIA DE VIAJES',
        'FESTEJOS',
        'ENTRETENIMIENTO',
        'SONIDO',
        'ELECTRICISTA',
        'HERRERIA',
        'GEOLOGIA',
        'PLOMERIA',
        'ALBAÑILERIA',
        'MAMPOSTERIA',
        'CARPINTERIA',
        'COSTURA',
        'DISEÑO GRAFICO',
        'LEGAL',
        'LATONERIA',
        'PINTURA',
        'MANTENIMIENTO NAVAL',
        'REFRIGERACION',
        'MUDANZAS',
        'EDUCACION',
        'TELEFONIA',
        'GRUMER',
        'VETERINARIO',
        'LIMPIEZA',
        'TAPICERIA',
        'REDES',
        'TRADUCCIONES',
        'SEGUROS'


    ];
});
</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>