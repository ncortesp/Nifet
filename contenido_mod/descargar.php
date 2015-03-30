<?php
session_start();
$ruta_proyeto = $_SESSION['ruta_basedato'];
$ruta_descarga="../".$ruta_proyeto;
$archivo=$_SESSION['proymostrar'].'.zip';

//echo "ruta decarga : ".$ruta_descarga;
//echo "archivo : ".$archivo;
//Si la variable archivo que pasamos por URL no esta
//establecida acabamos la ejecucion del script.



//Utilizamos basename por seguridad, devuelve el
//nombre del archivo eliminando cualquier ruta.
$archivo = basename($archivo);

//echo "basename archivo : ".$archivo;

$ruta = $ruta_descarga."/".$archivo;

//echo "ruta2 ".$ruta;

/*if (is_file($ruta))
{
   header('Content-Type: application/force-download');
   header('Content-Disposition: attachment; filename='.$archivo);
   header('Content-Transfer-Encoding: binary');
   header('Content-Length: '.filesize($ruta));

   readfile($ruta);
}
else
   exit();*/
?>

<a href="<?php echo $ruta; ?>" ><button>Descarga tu proyecto</button></a>

<fieldset>
<legend>Vista final del Proyecto</legend>
<iframe src="<?php echo $ruta_descarga."/index.html"; ?>" height="500px" width="99%" style="border:none;"></iframe>
</fieldset>
