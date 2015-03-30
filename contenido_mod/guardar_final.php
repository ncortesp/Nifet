<?php
session_start();
$ruta_proyeto = $_SESSION['ruta_basedato'];




$pagina_completa = $_POST['div_id'];
$pagina="../".$ruta_proyeto."/index.html";
$comprimir="../".$ruta_proyeto;

$nombre_proyecto_update = $_SESSION['proymostrar'];
include("../listado_proyectos/clases/conexion.class.php");

class actualizar{
	function actualizar(){
 		$this->con=new DBManager;

 	}

	function actualizar_fecha($nombre_proy){

		date_default_timezone_set("Chile/Continental");
		$fecha=date("y-m-d H:i:s");
		if($this->con->conectar()==true){
			//	echo $fecha;
				//echo $nombre_proy;
			//print_r($campos);
			$subir= mysql_query("UPDATE proyecto SET modif_proy = '".$fecha."' WHERE nombre_proy = '".$nombre_proy."'");

		}
	}

}

	$obj_actualizar=new actualizar;
    $actualizar = $obj_actualizar->actualizar_fecha($nombre_proyecto_update);



/*function pagina_final($ruta_proyecto,$pagina_completa){*/




function final_pagina($ruta,$contenido){
		$file = fopen($ruta,"w");
		fputs($file,"$contenido");

	}

final_pagina($pagina,$pagina_completa);




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
               // echo 'Error: Unable to create zip file';
                exit;}
        if(is_file($src)){$zip->addFile($src,substr($src,$path));}
        else{
                if(!is_dir($src)){
                     $zip->close();
                     @unlink($dst);
                //     echo 'Error: File not found';
                     exit;}
        $this->recurse_zip($src,$zip,$path);}
        $zip->close();
        return $dst;
}
}

//Source file or directory to be compressed.
$src=$comprimir;
//Destination folder where we create Zip file.
$dst=$comprimir;
$z=new recurseZip();
 $z->compress($src,$dst);







?>
