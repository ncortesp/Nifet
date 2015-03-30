<?php

include('../../../listado_proyectos/clases/conexion.class.php');




class subirimg{
	var $con;

	function subirimg(){
		$this->con=new DBManager;
		}

	function img($nomproy){
		if($this->con->conectar()==true){
	   return  mysql_query("SELECT *  from proyecto WHERE nombre_proy = '".$nomproy."'");

				}
			}

	function arriba($id,$name,$subir2){

		if($this->con->conectar()==true){
		mysql_query("INSERT INTO tbl_imagenes (id_proyecto, nombre, ruta) values('".$id."', '".$name."','".$subir2."' ) " );
		}
	}

	function mostrar_img ($id){
		if($this->con->conectar()==true){

	    return  mysql_query("SELECT * FROM tbl_imagenes WHERE id_proyecto = '".$id."'");

				}



		}

	function eliminar($id){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM tbl_imagenes WHERE id_img=".$id);
		}
	}


}



?>

