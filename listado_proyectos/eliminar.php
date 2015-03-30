<?php
include('clases/conexion.class.php');
require('clases/cliente.class.php');

$proy_id=$_GET['id'];

$obj_ruta=new Cliente;
$ruta =  $obj_ruta->ruta($proy_id);

$final_ruta=mysql_fetch_array($ruta);
$final_final="../".$final_ruta['url_carpeta'];



function EliminarDir($ruta){

	foreach(glob($ruta . "/*") as $elemento){
		if(is_dir($elemento)){
			EliminarDir($elemento);
			}
			else{
				unlink($elemento);
				}
		}
		rmdir($ruta);

	}








$objCliente=new Cliente;
if( $objCliente->eliminar($proy_id) == true){

	if(is_dir($final_final)){
			EliminarDir($final_final);
			//$msg = " borrada $ruta";
			/* echo "<script>alert('borrada $final_final');</script>"; */
		}
		else{
			//$msg = "no se encuentra tu wea de carpeta";
			echo "<script>alert('no se encuentra $final_final');</script>";
			}
	echo "Registro eliminado correctamente con id ".$proy_id;
}else{
	echo "Ocurrio un error" .$proy_id;
}
?>
