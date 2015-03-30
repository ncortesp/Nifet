<?php
session_start();
$ruta_del_usuario = $_SESSION['ruta_basedato'];

$nombre= $_POST['nombre'];
$archivo= $_POST['archivo'];


	$ha = explode("\\", $nombre);
			$nombre = $ha[2];

	$extension = explode(".",$nombre);
	$ext = $extension[1];

	if($ext == 'jpg' || $ext == 'png' || $ext == 'gif')
	{
		$img= explode(",", $archivo);
		$archivo = $img[1];
		$archivo=base64_decode($archivo)	;
		$file = fopen("../../../".$ruta_del_usuario."/img/".$nombre,"w");
		fputs($file,$archivo);
		fclose($file);
		echo "exito,img/".$nombre;
	}
	else{
		echo "se fue a la mierda,0";
	}

?>
