<?php
/**
 * Archivo que se incluye mediante include que realiza la conexion a
 * la base de datos mediante PDO
 */

$host="localhost";
$user="root";
$pass="";
$database="fenetco1_bd";
$dsn="mysql:host=".$host.";dbname=".$database;

try
{
    $dbh = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
    die("No hay conexion con la base de datos: ".$e->getMessage());
}
?>
