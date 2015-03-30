<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- alertas
<script src='../../js/jquery-1.11.1.js'></script>
<script src='../../js/jAlert-v2.js'></script>
<link rel="stylesheet" type="text/css" href="../../css/jAlert-v2.css">-->
</head>
<?php
session_start(); 
include('../../listado_proyectos/clases/conexion.class.php');
//clase pafa comparar el nombre del proyecto nuevo en BD

$bx_nombre_proy=$_POST['bx_nombre_proy'];


class guardar_proyecto{
	var $con;	
	function guardar_proyecto(){
		$this->con=new DBManager;
		}
	function proyecto($nombre_p){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM proyecto WHERE nombre_proy = '".$nombre_p."'");		
			}		
		}
		
	// verifica si el nombre del proyecto existe en la bd 			
    function existe($bx_nombre_proy)	
	 {
  	if($this->con->conectar()==true){
	    $sql=mysql_query("SELECT * FROM proyecto WHERE nombre_proy = '".$bx_nombre_proy."' AND id_user='".$_SESSION['uid']."'" );
		$resultado = mysql_fetch_object($sql);
		 	if($resultado) 		
			 {
			  $variable= '1';						  
			}
			 else
			 {	
			  $variable= '0'; 	 
			}
			return $variable;	
			}  
		}		
	// guarda en la  base de  datos el registro  y crea carpetas de usuarios.  			
	function guardar($bx_nombre_proy){
		$nombre= $bx_nombre_proy;	
		$consulta=$this->existe($nombre);
		$_SESSION['proymostrar']=$nombre;
		
		if ($consulta == '1')
		{
			$funciona = '1';
		 echo '<script type="text/javascript"> alert("No se pudo cargar el nombre del proyeto ya existe!!!")</script>';
	     echo '<script>window.location.replace("../index_nuevo_proyecto.php")</script>';
	    
		}else{ 
		   $funciona='0';
		 // echo $bx_nombre_proy;	
		//rescatamos datos del usuario para guardar  segun id de usuario el proyecto.  y generar las carpetas correspondiente. 
			
			if($this->con->conectar()==true){
				$slct=mysql_query("select * from tbl_users where id='".$_SESSION['uid']."'");
				$sql=mysql_fetch_array($slct);
				$uid=$sql['id'];
				$nombre_usuario=$sql['tx_username'];
				//echo $nombre_usuario;
				//echo $uid;	
				}	
				
			//generamos variables de rutas para guardar las carpetas   de proyectos en el servidor
			
			
			$ruta_servidor='../../carpeta_usuarios';//cualquier carpeta = carpeta usuario
			$ruta_proyecto=$bx_nombre_proy;//lo que ingreso  y que ya se que esta libre 
			$ruta_final=$ruta_servidor.'/'.$nombre_usuario.'/'.$ruta_proyecto;// ../carpetausuario/felipe/  nom proyecto 
			$carpeta_css=$ruta_final.'/'.'css';
			$carpeta_js=$ruta_final.'/'.'js';
			$carpeta_img=$ruta_final.'/'.'img';	
			$carpeta_slider=$ruta_final.'/'.'img_slider';
			
			$ruta_bd = 'carpeta_usuarios/'.$nombre_usuario.'/'.$ruta_proyecto;
			
			//ruta par a modificar la pagina
			$ruta_edit = 'carpeta_usuarios/'.$nombre_usuario;
			$_SESSION['editar_ruta']=$ruta_edit;
			// inicio de session para  ruta  de nuevo proyecto.... <br />
			$_SESSION['ruta_basedato']= $ruta_bd; 
			$_SESSION['nombreproyecto']=$bx_nombre_proy;
			
			//creamos directorios correspondiente solo si  no existe , luego guarda los datos en la base de datos
			if(!file_exists($ruta_final)){
			mkdir($ruta_final,775);
			mkdir($carpeta_css,775);
			mkdir($carpeta_js,775);
			mkdir($carpeta_img,775);
			mkdir($carpeta_slider,775);
			//echo $ruta_proyecto;
			
			/* echo '<script>window.location.replace("plantilla.php")</script>'; */
			
			date_default_timezone_set("Chile/Continental");
	$fecha=date("y-m-d H:i:s");
	
	$sql=mysql_query("insert into proyecto (nombre_proy,fecha_proy,modif_proy,id_user,url_carpeta) values ('$bx_nombre_proy','$fecha','$fecha','$uid','$ruta_bd')");
	echo '<script type="text/javascript"> alert("Cargado con éxito")</script>';
	echo '<script>window.location.replace("../indexep.php")</script>';
	
	
	
	}
		}
	
		}
	function guardar_pagina(){
		if($this->con->conectar()==true){
			$slct=mysql_query("select id_proyecto from proyecto where id_user='".$_SESSION['uid']."' ORDER BY id_proyecto DESC LIMIT 1");
			$slc=mysql_fetch_array($slct);
			$pid=$slc['id_proyecto'];
				 
			$sql=mysql_query("insert into paginas (id_proyecto,nombre_pagina) values ('$pid','index.php')");
			}
			return $pid;
		
}
	function verificarnumproy(){
		if($this->con->conectar()==true){
			$sql=mysql_query("select *  from proyecto where id_user = '".$_SESSION['uid']."' ");
			$contador = mysql_num_rows($sql);
			return $contador;				
				}
			
			
			}
		
		}
	

$obj_nuevo=new guardar_proyecto;
$verificar = $obj_nuevo->verificarnumproy();
if($verificar < '6'){
$consultar = $obj_nuevo->guardar($bx_nombre_proy);
$gpagina = $obj_nuevo->guardar_pagina();
}else{


	
	?>
	<script>
	alert('Ha sobrepasado el límite de proyectos (6) por favor borre algun proyecto anterior para continuar');
    window.location.replace("../../listado_proyectos/index.php");									
    </script>
	<?php
}


// echo $consultar;
// echo 'el id de proy es'.$gpagina;


 





?>
