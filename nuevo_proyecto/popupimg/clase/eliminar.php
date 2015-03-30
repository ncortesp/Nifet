<?php
require('claseimg.php');

$id_img=$_GET['id_img'];
$objelimg=new subirimg;
if( $objelimg->eliminar($id_img) == true){
	echo "Registro eliminado correctamente con id ".$id_img;
}else{
	echo "Ocurrio un error" .$id_img;
}
header('location: ../galeria.php');
?>
