
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

    .asesor{width: 100%; height: 60px; margin-top: 80px; background-color: green; border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; font-size: 20px; color: white; padding-top: 15px; text-align: center; cursor: pointer;}
    .asesor:hover{background-color:#006837; }

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
<p style="width: 100%; text-align: center; margin-bottom: 50px;"><b>Convertirse en Proveedor</b></p>      

<br>
<form action="registroUp.php" method="post" id="crearNuevoT" style="background-color: none; height: auto; width: 250px; margin: 0 auto;">







<label style="color: gray; ">Nombre del tecnico o Empresa</label>
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




<label style="color: gray;">Tipo de Proveedor</label>
<input  type="text"  name="tipodeproveedor" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>



<span id="proveedorD"></span>
    <label style="color: gray; ">Especialidades</label><br>
    <label style="font-size: 10px;"><b>Lista de especialidades:</b> </label>
    <label id="especialidadesAgg" style="font-size: 12px;"></label>

    <input type="hidden" id="test" name="test">

<span id="especialidadesD"></span>




<input  type="text" name="especialidad" value="" id="especialidad" placeholder="Agregar Especialidad" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>


<input type="button" value="Agregar" id="agg" name="agg" onclick="agregar()">
<br>

<label style="color: gray; ">Email</label>
<input  type="email" spellcheck="false" name="email" value=""  style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<span id="emailD"></span>

<label style="color: gray; ">Telefono 1</label>
<input  type="text" spellcheck="false" name="telefono1" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<span id="telefonoD"></span>


<label style="color: gray;">Telefono 2</label>
<input  type="text"  id="apellido" name="telefono2" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>










<br><br>
<hr>


<label style="color: gray;">Persona Contacto</label>
<input  type="text" id="telefono" name="personaContacto" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
    <span id="personaD"></span>

<label style="color: gray; ">Cargo</label>
<input  type="text" spellcheck="false" name="cargo" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>



<label style="color: gray;">Telefono (WhatsApp)</label>
<input  type="text"  id="apellido" name="whatsApp" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<hr>
<br><br>











<br><br>
<hr>
<label style="color: gray;">Pagina Web</label>
<br>
<input  type="text" spellcheck="false" name="pagina" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>

<br>

<label style="color: gray;">Estan Interesados en que FENET les haga publicidad a sus servicios?</label>
<input type="radio" name="publicidad" value="si">Si<br>
<input type="radio" name="publicidad" value="no">No<br>
<hr>

<span id="publicidadD"></span>





<br><br>
<hr>
<label style="color: gray;">Pais</label>
 <select name="pais" style="
                      background-color: #f2f2f2;
                      width: 90px;
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


    <label style="color: gray;">Ciudad</label>
<input  type="text" id="direccion" name="ciudad" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>



    <label style="color: gray;">Direccion</label>
<input  type="text" id="direccion" name="direccion" tabindex="1" value="" style="
    background-color: #f2f2f2;
    width: 250px;
    height: 30px;
    border: #c4c4c4 solid 1px;
    margin-top: 5px;
    font-family: Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
    "/>
<hr>
<!--
    <input type="submit" name="" value="Registrar" style="
      background-color: #c4c4c4;
      width: 250px;
      height: 30px;
      border: #f2f2f2 solid 1px;
      margin-top: 30px;
      cursor: pointer;
    ">
-->

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







<a href=""><div class="asesor"></div></a>

</section>
    




<script>
    function validarCampos(){

        var text=document.forms['crearNuevoT'].nombre.value.length;
        var text2=document.forms['crearNuevoT'].email.value.length;
        var text3=document.forms['crearNuevoT'].telefono1.value.length;
        var text4=document.forms['crearNuevoT'].personaContacto.value.length;
        var text5=document.forms['crearNuevoT'].tipodeproveedor.value.length;
        //var text6=document.forms['crearNuevoT'].test.value.length;
        //var text7=document.forms['crearNuevoT'].publicidad.value.length;



        if(text==0) {
            document.forms['crearNuevoT'].nombre.focus();   
            document.getElementById("nombreD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("nombreD").style.color = "red";
            return false;
        }
        else if(text2==0){
            document.forms['crearNuevoT'].email.focus();   
            document.getElementById("emailD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("emailD").style.color = "red";
            return false;
        }
        else if(text3==0){
            document.forms['crearNuevoT'].telefono1.focus();   
            document.getElementById("telefonoD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("telefonoD").style.color = "red";
            return false;
        }
        else if(text4==0){
            document.forms['crearNuevoT'].personaContacto.focus();   
            document.getElementById("personaD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("personaD").style.color = "red";
            return false;
        }
        else if(text5==0){
            document.forms['crearNuevoT'].tipodeproveedor.focus();   
            document.getElementById("proveedorD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("proveedorD").style.color = "red";
            return false;
        }
        /*
        else if(text6==0){
            document.getElementById("especialidadesD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("especialidadesD").style.color = "red";
            return false;
        }
        
        else if(text7==0){
            document.forms['crearNuevoT'].publicidad.focus();   
            document.getElementById("publicidadD").innerHTML = "campo obligatorio*<br>";
            document.getElementById("publicidadD").style.color = "red";
            return false;
        }
        */
        else
        {
            document.forms['crearNuevoT'].submit();
        }

    }
</script>

 <script type="text/javascript">
          
             especialidades=[];        
        
            
                 function agregar(){
              
                  nuevo = document.getElementById('especialidad').value;

                  especialidades.push(nuevo);

                  document.getElementById('especialidad').value = ""; 

                  document.getElementById('especialidadesAgg').innerHTML = especialidades;


                  document.getElementById('test').value = especialidades 

                  }               

        </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>