<link rel="stylesheet" href="../contenido_mod/estiloedicion.css">

<?php
session_start();



$nombre_ruta=$_GET['ruta'];
$proyecto_nombre=$_GET['nombre'];
$id = $_GET['id'];

$_SESSION['proymostrar']=$proyecto_nombre;

$_SESSION['ruta_basedato']=$nombre_ruta;
$_SESSION['nombreproyecto']=$proyecto_nombre;
$_SESSION['id_proyecto'] = $id;

$nombre_fichero = '../'.$nombre_ruta.'/index.html';


	if (file_exists($nombre_fichero)) {
    	//echo "El fichero $nombre_fichero existe";
		/*echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../contenido_mod/indexmod.php'>";*/
	} else {
    	//echo "El fichero $nombre_fichero no existe";
		echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../nuevo_proyecto/indexep.php'>";
	}

?>
<meta charset="utf-8">
<script type="text/javascript">
	function redir(numero){
		switch(numero){
			case '1':
				 window.location.href = '../contenido_mod/indexmod.php';
				 break;
			case '2':
				<?php
				if (file_exists($nombre_fichero))
				?>{var respuesta=confirm("la modificacion del CSS le hara perder sus widgets");
     				if(respuesta==true)
        			 window.location="../nuevo_proyecto/indexep.php";
    					else{
        				 return 0;}}
				break;
		}
	}
</script>
<div>
	<center>
    	<button class="botoncito" onClick="redir('2')">Modificar el diseño y CSS</button>
        <?php
		if (file_exists($nombre_fichero))
    	echo "<button class='botoncito' onClick=\"redir('1')\">Modificar y Añadir Widget</button>";
		?>
 	</center>
</div>
