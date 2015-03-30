<?php
require('clasepagina.php');


$id_p=$_GET['id_pag'];
echo $id_p;
$objel=new grilla_pag;
if( $objel->eliminar_pag($id_p) == true){
	echo "Registro eliminado correctamente con id ".$id_p;
}else{
	echo "Ocurrio un error" .$id_p;
}

?>
