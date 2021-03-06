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

    .asesor{width: 100%; height: 60px; margin-top: 50px; background-color: green; border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; font-size: 20px; color: white; padding-top: 15px; text-align: center; cursor: pointer;}
    .asesor:hover{background-color:#006837; }

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
  <div style=" text-align: right; padding-right: 10px;" >
    <a href="serviciosIndex.php"><img src="img/flechave.jpg" height="50px"></a>
  </div>


<div style="padding-top: 30px;"></div>
<p style="width: 100%; text-align: center; margin-bottom: 80px;"><b>Direccion Del Servicio</b></p>


<form method="post" enctype="multipart/form-data" action="loginIndex.php" style="width: 270px; margin:0 auto;">

 <div style="margin-top: 0px;"><!-- content -->

     <label style="color: gray;">Pais</label>

    <select name="pais" style="
        background-color: #f2f2f2;
        width: 100px;
        height: 20px;
        border: #c4c4c4 solid 1px;
        font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
        "/>
    <option value="venezuela">Venezuela</option>
    </select>


<br><br>


    <label style="color: gray;">Estado:</label>
    
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

    <label style="color: gray;">Ciudad:</label>
    <input  type="text" spellcheck="false" name="ciudad" style="
        background-color: #f2f2f2;
        width: 86px;
        height: 20px;
        border: #c4c4c4 solid 1px;
        font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
        "/>


<br><br>


        <label style="color: gray;">Dirección de Servicio:</label>
        <br>

      <textarea rows="3" cols="35" placeholder="Calle, Casa, edificio o apartamento" name="direccionServ" style="
        background-color: #f2f2f2;
        width: 240px;
        border: #c4c4c4 solid 1px;
        font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
        "/></textarea>











     <br>

     <input type="hidden" name="servicio" value="<?php echo $servicio    = $_POST['servicio'];  ?>">

     <input type="hidden" name="descripcion" value="<?php echo $descripcion    = $_POST['descripcion'];  ?>">

     <input type="hidden" name="tipodeServicio" value="<?php echo $tipodeServicio    = $_POST['tipodeServicio'];  ?>">

     <input type="hidden" name="fecha" value="<?php echo $tipodeServicio    = $_POST['fecha'];  ?>">

     <input type="hidden" name="hora" value="<?php echo $tipodeServicio    = $_POST['hora'];  ?>">

     <input type="submit" name="enviar" value="Enviar" style="
              background-color: #00A1B5;
              width: 100px;
              height: 30px;
              border: #f2f2f2 solid 1px;
              margin-left: 80px;
              margin-top: 50px;
              cursor: pointer;
              display: inline-block;
              color:white;
              font-size: 17px;
              padding-top: 3px;
          ">
    </form>

</div>




<a href="asesor.php"><div class="asesor">Contactar Asesor</div></a>

</section>
    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
