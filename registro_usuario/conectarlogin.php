<?php

$conexio;
function conectar_bd()
{
    global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "root";
    $elPw  = "12345";
    $elServer ="localhost";
    $laBd = "sistema";

    //Conectar
    $conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error());

    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error());
/*	mysql_set_charset("utf8",$conexio);
*/}
?>
