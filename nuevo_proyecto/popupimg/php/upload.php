<?php
include('../clase/claseimg.php');

session_start();

//clase     tratamiento de imagenes


$nomproy= 	$_SESSION['nombreproyecto'];


$subir='../../../'.$_SESSION['ruta_basedato'];


    foreach($_FILES['images']['error'] as $key => $error){
        if($error == UPLOAD_ERR_OK){
            $name = $_FILES['images']['name'][$key];
            move_uploaded_file($_FILES['images']['tmp_name'][$key], $subir.'/img/' . $name);




        }
    }

$subir2 = $_SESSION['ruta_basedato'].'/img/'.$name;
	$objImg=new subirimg;
			$consulta=$objImg->img($nomproy);


			$id=mysql_fetch_array($consulta);
			$id = $id['id_proyecto'];
			$_SESSION['id_proyecto']=$id;

			$objarriba=new subirimg;
			$consulta2=$objarriba->arriba($id,$name,$subir2);

    echo "<h3>Archivo cargado :)";








?>


<script>

</script>
