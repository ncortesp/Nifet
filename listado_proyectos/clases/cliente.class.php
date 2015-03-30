<?php
session_start();
include_once("conexion.class.php");



class Cliente{
 //constructor

 	var $con;

 	function Cliente(){
 		$this->con=new DBManager;

 	}

	function insertar($campos){
		date_default_timezone_set("Chile/Continental");
		$fecha=date("d/m/y H:i:s");
		$campos[4]=$_SESSION['uid'];
		if($this->con->conectar()==true){
			//print_r($campos);
			//echo "INSERT INTO cliente (nombres, ciudad, sexo, telefono, fecha_nacimiento) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')";
			return mysql_query("INSERT INTO proyecto (nombre_proy, creador_proy, fecha_proy, modif_proy, id_user) VALUES ('".$campos[0]."','".$campos[1]."','".$fecha."','".$fecha."','".$campos[4]."')");
		}
	}

	function actualizar($campos,$id){
		date_default_timezone_set("Chile/Continental");
		$fecha=date("y-m-d H:i:s");
		if($this->con->conectar()==true){
			//print_r($campos);
			return mysql_query("UPDATE proyecto SET nombre_proy = '".$campos[0]."', creador_proy = '".$campos[1]."',  modif_proy = '".$fecha."' WHERE id = ".$id);
		}
	}

	function mostrar_cliente($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM proyecto WHERE id=".$id);
		}
	}

function mostrar_clientes(){
		if($this->con->conectar()==true){

			return mysql_query("SELECT * FROM proyecto WHERE id_user=".$_SESSION['uid']." ORDER BY id_proyecto DESC ");
		}
	}

	function eliminar($id){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM proyecto WHERE id_proyecto=".$id);
		}


	}

	function ruta($id){
		if($this->con->conectar()==true){
			return mysql_query("SElECT * FROM proyecto WHERE id_proyecto ='".$id."'");
										}
					  }
}



?>
