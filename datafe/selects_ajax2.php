<?php
/**
 * Codigo encargado de devolver el listado de poblaciones segun el pais
 * recibido por post...
 * Devuelve mediante json el codigo html del <select> de la ciudad
 */

include("model/selects_db.php");

$result=0;
$contenido="";

if($_POST["pais"])
{
    # se ha recibido el pais

    # comprobamos que exista dicho pais en la base de datos
    $sql="SELECT * FROM paises WHERE codigo=?";
    $params=array($_POST["pais"]);
    $db=$dbh->prepare($sql);
    $db->execute($params);
    if($db->rowCount()==1)
    {
        # existe el pais... vamos a bucar las ciudades...
        $sql="SELECT * FROM estados WHERE pais_codigo=? ORDER BY estado";
        $params=array($_POST["pais"]);
        $db=$dbh->prepare($sql);
        $db->execute($params);
        if($db->rowCount()>0)
        {
            $result=1;
            # creamos el contenido del select con todos los paises
            $contenido.="<option value='0'>Selecionar...</option>";
            foreach($db->fetchAll() as $row)
            {
                $contenido.="<option value='".$row["estado"]."'>".$row["estado"]."</option>";
            }
        }
    }
}else{
    $contenido.="<option value='0'></option>";
}

echo json_encode(
    array(  "result"=>$result,
            "contenido"=>utf8_encode($contenido)
         )
);
?>
