<?php

session_start();

function fiximg($string){

			$ha = explode("/", $string);
			$total = count($ha);
			$indice = $total - 2;

			if($indice < 1){
				return " ";
			}
			else{
				$resultado = "url(../".$ha[$indice]."/".$ha[$indice+1];
				return $resultado;
			}


}

$titulo_pagina = $_SESSION['proymostrar'];
//bandera
$bandera = $_POST['bandera'];


$bandera_arriba =$_POST['bandera_arriba'];


//contenedorr general/////////////
$general_ancho=$_POST['general_ancho'];
$general_alto=$_POST['general_alto'];
$general_fondo=$_POST['general_fondo'];
$general_margen=$_POST['general_margen'];
$general_posicion=$_POST['general_posicion'];
$general_overflow=$_POST['general_overflow'];



//contenedorr wrapper/////////////
$wrapper_ancho=$_POST['wrapper_ancho'];
$wrapper_alto = $_POST['wrapper_alto'];
$wrapper_fondo=$_POST['wrapper_fondo'];
$wrapper_margen_top=$_POST['wrapper_margen_top'];
$wrapper_float=$_POST['wrapper_float'];
$wrapper_posicion=$_POST['wrapper_posicion'];
$wrapper_img=fiximg($_POST['wrapper_img']);



//contenedorr header/////////////
$header_ancho=$_POST['header_ancho'];
$header_alto=$_POST['header_alto'];
$header_fondo=$_POST['header_fondo'];
$header_border=$_POST['header_border'];
$header_boxShadow=$_POST['header_boxShadow'];
$header_img=fiximg($_POST['header_img']);
$header_borde_radio=$_POST['header_borde_radio'];



//contenedor box/////////////
$box_ancho=$_POST['box_ancho'];
$box_alto=$_POST['box_alto'];
$box_fondo=$_POST['box_fondo'];
$box_margen=$_POST['box_margen'];
$box_overflow=$_POST['box_overflow'];




//contenedor left/////////////
$box_left_ancho=$_POST['box_left_ancho'];
$box_left_alto=$_POST['box_left_alto'];
$box_left_fondo=$_POST['box_left_fondo'];
$box_left_float=$_POST['box_left_float'];
$box_left_margen=$_POST['box_left_margen'];
$box_left_borde_radio=$_POST['box_left_borde_radio'];
$box_left_border=$_POST['box_left_border'];
$box_left_boxshadow=$_POST['box_left_boxshadow'];
$box_left_img=fiximg($_POST['box_left_img']);



//contenedor right/////////////
$box_right_ancho=$_POST['box_right_ancho'];
$box_right_alto=$_POST['box_right_alto'];
$box_right_fondo=$_POST['box_right_fondo'];
$box_right_float=$_POST['box_right_float'];
$box_right_margen=$_POST['box_right_margen'];
$box_right_borde_radio=$_POST['box_right_borde_radio'];
$box_right_border=$_POST['box_right_border'];
$box_right_boxshadow=$_POST['box_right_boxshadow'];
$box_right_img=fiximg($_POST['box_right_img']);



//contenedor footer////////////
$footer_ancho=$_POST['footer_ancho'];
$footer_alto=$_POST['footer_alto'];
$footer_fondo=$_POST['footer_fondo'];
$footer_margen=$_POST['footer_margen'];
$footer_borde_radio=$_POST['footer_borde_radio'];
$footer_border=$_POST['footer_border'];
$footer_boxshadow=$_POST['footer_boxshadow'];
$footer_img=fiximg($_POST['footer_img']);



//contenedor central////////////
$central_ancho=$_POST['central_ancho'];
$central_alto=$_POST['central_alto'];
$central_fondo=$_POST['central_fondo'];
$central_float=$_POST['central_float'];
$central_margen=$_POST['central_margen'];
$central_border=$_POST['central_border'];
$central_boxshadow=$_POST['central_boxshadow'];
$central_img=fiximg($_POST['central_img']);
$central_borde_radio=$_POST['central_borde_radio'];










$div_central="<div id='central'></div>";

if($bandera =='1' && $bandera_arriba == '1'){
	$C_arriba=$div_central;
	$C_central="";
	$css_central="#central{width: $central_ancho;min-height: $central_alto ;background-color: $central_fondo ;float: $central_float ;margin:$central_margen ;border: $central_border ;
	box-shadow: $central_boxshadow;border-radius: $central_borde_radio;background-image:$central_img;

}";
	}
else if ($bandera=='1' && $bandera_arriba=='0'){

	$C_arriba="";
	$C_central=$div_central;
	$css_central="#central{width: $central_ancho;min-height: $central_alto ;background-color: $central_fondo ;float: $central_float ;margin:$central_margen;border: $central_border ;
	box-shadow:  $central_boxshadow ;
	background-image:$central_img;border-radius: $central_borde_radio;


}";
	}
else{
	$C_arriba="";
	$C_central="";
	$css_central="";

	}

$subir='../'.$_SESSION['ruta_basedato'];
$subircss=$subir.'/css/style.css';
$subirjs=$subir.'/js/js.js';


$file = fopen($subir.'/index.html',"w");


fputs($file,"
<!DOCTYPE>
<html>
<head>
<title>Inicio - $titulo_pagina</title>
<link type='text/css' rel='stylesheet' href='css/style.css' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/js.js'></script>
  <script>
    $('#slideshow > div:gt(0)').hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);

    </script>
    <style>
#slideshow {

    position: relative;
    width: 100%;
    height: 240px;

}

#slideshow > div {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
}
</style>
</head>
<div id='general'  >
	<div class='wrapper' id='wrapper'>
		<div class='header' id='header' >
	  	<p>header</p>
		</div>
         	<div id='menu'></div>
   		<div id='box' >
			$C_arriba
			<div id='box_left' >contenedor left</div>
            <div id='box_right' >contenedor derecho</div>
            $C_central
  		</div>
		<div class='footer' id='footer'>footer</div>
	</div>
</div>
</html>
");

$js_upload=fopen($subirjs,"w");

fputs($js_upload,"

$('#slideshow > div:gt(0)').hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);



");


$archivo_temporal= fopen('temp.php',"w");

fputs($archivo_temporal,"
<link type='text/css' rel='stylesheet' href='css/style.css' />
<div id='general'  >
	<div class='wrapper'>
		<div class='header' >
	  	<p>header</p>
		</div>

		<div id='menu'></div>
   		<div id='box' >
			$C_arriba
			<div id='box_left' >contenedor left</div>
            <div id='box_right' >contenedor derecho</div>
            $C_central
  		</div>
		<div class='footer'>footer</div>
	</div>
</div>
");


?>



<?php
$file = fopen($subircss,"w");

fputs($file,"

#general{
width: $general_ancho;
height: $general_alto ;
background-color:  $general_fondo;
margin: $general_margen;
position: $general_posicion;
background-image:$wrapper_img;
overflow:$general_overflow;

	}
.wrapper{

		width:$wrapper_ancho;
		background-color:$wrapper_fondo ;
		margin:  $wrapper_margen_top ;
		float: $wrapper_float ;
		background-image:$wrapper_img;



	}
.header{
	min-width: $header_ancho;
	background-color:$header_fondo ;
	height: $header_alto  ;
	border: $header_border ;
	box-shadow:  $header_boxShadow ;
	background-image:$header_img;
	border-radius:$header_borde_radio;
	background-size: 100% 100%;

	}

#box{

	width: $box_ancho;
	height:$box_alto ;
	margin: $box_margen ;
	background-color:  $box_fondo ;
	overflow:$box_overflow;

	}
#box_left{

	width: $box_left_ancho ;
	min-height:$box_left_alto ;
	background-color:$box_left_fondo ;
	float:$box_left_float ;
	margin: $box_left_margen ;
	border-radius: $box_left_borde_radio;
	border: $box_left_border ;
	box-shadow:  $box_left_boxshadow ;
	background-image:$box_left_img;
	background-size: 100% 100%;
	}
#box_right{

	width: $box_right_ancho ;
	min-height: $box_right_alto ;
	background-color: $box_right_fondo ;
	float: $box_right_float ;
	margin:$box_right_margen ;
	border-radius: $box_right_borde_radio;
	border: $box_right_border ;
	box-shadow:  $box_right_boxshadow ;
	background-image:$box_right_img;
	background-size: 100% 100%;

}

.footer{
		 width: $footer_ancho ;
		 background-color: $footer_fondo ;
		 min-height: $footer_alto ;
		 margin: $footer_margen;
		 border-radius: $footer_borde_radio;
		 	border: $footer_border ;
	box-shadow:  $footer_boxshadow ;
	background-image:$footer_img;
	background-size: 100% 100%;



	}
$css_central

#slideshow {

    position: relative;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 20px rgba(0,0,0,0.4);
}

#slideshow > div {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
}


	");



$archivo = 'jquery.js';
$nuevo_archivo = $subir.'/js/jquery.js';

if (!copy($archivo, $nuevo_archivo)) {

    echo "Error al copiar $archivo...\n";
}


//copiar el negro
function full_copy( $source, $target ) { if ( is_dir( $source ) ) { @mkdir( $target ); $d = dir( $source ); while ( FALSE !== ( $entry = $d->read() ) ) { if ( $entry == '.' || $entry == '..' ) { continue; } $Entry = $source . '/' . $entry; if ( is_dir( $Entry ) ) { full_copy( $Entry, $target . '/' . $entry ); continue; } copy( $Entry, $target . '/' . $entry ); } $d->close(); }else { copy( $source, $target ); } }




$source ='blanco';
$destination = $subir.'/blanco';
full_copy($source, $destination)




?>


<?php

class recurseZip
{
private function recurse_zip($src,&$zip,$path) {
        $dir = opendir($src);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '/' . $file) ) {
                    $this->recurse_zip($src . '/' . $file,$zip,$path);
                }
                else {
                    $zip->addFile($src . '/' . $file,substr($src . '/' . $file,$path));
                }
            }
        }
        closedir($dir);
}

public function compress($src,$dst='')
{
		if(substr($src,-1)==='/'){$src=substr($src,0,-1);}
		if(substr($dst,-1)==='/'){$dst=substr($dst,0,-1);}
        $path=strlen(dirname($src).'/');
        $filename=substr($src,strrpos($src,'/')+1).'.zip';
		$dst=empty($dst)? $filename : $dst.'/'.$filename;
		@unlink($dst);
        $zip = new ZipArchive;
        $res = $zip->open($dst, ZipArchive::CREATE);
        if($res !== TRUE){
                echo 'Error: Unable to create zip file';
                exit;}
        if(is_file($src)){$zip->addFile($src,substr($src,$path));}
        else{
                if(!is_dir($src)){
                     $zip->close();
                     @unlink($dst);
                     echo 'Error: File not found';
                     exit;}
        $this->recurse_zip($src,$zip,$path);}
        $zip->close();
        return $dst;
}
}

//Source file or directory to be compressed.
$src=$subir;
//Destination folder where we create Zip file.
$dst=$subir;
$z=new recurseZip();
//echo $z->compress($src,$dst);
?>












<style>
#general{
width: <?php echo $general_ancho ?>;
height: <?php echo $general_alto ?> ;
background-color: <?php echo  $general_fondo ?>;
margin: <?php echo $general_margen ?>;
position:<?php echo  $general_posicion ?>;
background-image:<?php echo $wrapper_img ?>;
overflow:<?php echo $general_overflow ?>;

	}
.wrapper{

		width:<?php echo $wrapper_ancho ?>;
		background-color:<?php echo $wrapper_fondo ?> ;
		margin:  <?php echo $wrapper_margen_top  ?>;
		float: <?php echo $wrapper_float ?> ;
		background-image:<?php echo $wrappe_img ?>;



	}
.header{
	width: <?php echo $header_ancho ?>;
	background-color:<?php echo $header_fondo ?> ;
	height: <?php echo $header_alto  ?> ;
	border:<?php echo  $header_border ?> ;
	box-shadow:  <?php echo $header_boxShadow ?> ;
	background-image:<?php echo $header_img ?>;
	border-radius:<?php echo $header_borde_radio ?>;

	}

#box{

	width: <?php echo $box_ancho ?>;
	height:<?php echo $box_alto  ?>;
	margin: <?php echo $box_margen  ?>;
	background-color: <?php echo  $box_fondo  ?>;
	overflow:<?php echo $box_overflow ?>;

	}
#box_left{

	width: <?php echo $box_left_ancho ?> ;
	height:<?php echo $box_left_alto ?> ;
	background-color:<?php echo $box_left_fondo  ?>;
	float:<?php echo $box_left_float ?> ;
	margin:<?php echo  $box_left_margen  ?>;
	border-radius:<?php echo $box_left_borde_radio?>;
	border: <?php echo $box_left_border  ?>;
	box-shadow: <?php echo  $box_left_boxshadow ?> ;
	background-image:<?php echo $box_left_img ?>;
	}
#box_right{

	width: <?php echo $box_right_ancho  ?>;
	height: <?php echo $box_right_alto ?> ;
	background-color: <?php echo $box_right_fondo  ?>;
	float: <?php echo $box_right_float ?> ;
	margin:<?php echo $box_right_margen  ?>;
	border-radius:<?php echo $box_right_borde_radio?>;
	border: <?php echo  $box_right_border  ?>;
	box-shadow: <?php echo   $box_right_boxshadow ?> ;
	background-image:<?php echo  $box_right_img ?>;

}

.footer{
		 width:<?php echo  $footer_ancho ?> ;
		 background-color: <?php echo $footer_fondo  ?>;
		 height: <?php echo $footer_alto ?> ;
		 margin: <?php echo $margen  ?>;
		 border-radius:<?php echo $footer_borde_radio ?>;
		 	border: <?php echo $footer_border  ?>;
	box-shadow: <?php echo   $footer_boxshadow ?> ;
	background-image:<?php echo  $footer_right_img ?>;



	}
<?php echo $css_central ?>
</style>
<div id='general'  hidden="hidden">
	<div class='wrapper'>
		<div class='header' >
	  	<p>header</p>
		</div>

   		<div id='box' >
			<?php echo $C_arriba ?>
			<div id='box_left' >contenedor left</div>
            <div id='box_right' >contenedor derecho</div>
            <?php echo $C_central ?>
  		</div>
		<div class='footer'>footer</div>
	</div>
</div>


<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../contenido_mod/indexmod.php">
