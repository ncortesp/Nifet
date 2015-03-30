<?php
session_start();
$ruta_del_usuario = $_SESSION['ruta_basedato'];
$directorio = opendir("../../../".$ruta_del_usuario."/img_slider/");
?>

<div id="slideshow">

<?php

/*$directorio = opendir("../../../carpeta_usuarios/geraldine/mi primer proyecto/img/"); //ruta actual*/
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        /*echo "[".$archivo . "]<br />"; *///de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
		echo "<div><img src='../$ruta_del_usuario/img_slider/$archivo' style='width:100%; height:100%'></img></div>";

    }
}
?>

</div>
