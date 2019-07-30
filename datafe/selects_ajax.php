<?php
/**
 * Codigo encargado de devolver el listado de poblaciones segun el pais
 * recibido por post...
 * Devuelve mediante json el codigo html del <select> de la ciudad
 */

include("model/selects_db.php");

$result=0;
$contenido="";

if($_POST["industrias"])
{
    # se ha recibido el pais

    # comprobamos que exista dicho pais en la base de datos
    $sql="SELECT * FROM industrias WHERE codigo=?";
    $params=array($_POST["industrias"]);
    $db=$dbh->prepare($sql);
    $db->execute($params);
    if($db->rowCount()==1)
    {
        # existe el pais... vamos a bucar las ciudades...
        $sql="SELECT * FROM linea_negocio WHERE negocio_codigo=? ORDER BY lineaNegocio";
        $params=array($_POST["industrias"]);
        $db=$dbh->prepare($sql);
        $db->execute($params);
        if($db->rowCount()>0)
        {
            $result=1;
            # creamos el contenido del select con todos los paises
            $contenido.="<option value='0'>Selecionar...</option>";
            foreach($db->fetchAll() as $row)
            {
                $contenido.="<option value='".$row["lineaNegocio"]."'>".$row["lineaNegocio"]."</option>";
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
