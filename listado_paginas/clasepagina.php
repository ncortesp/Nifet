<?php
include('../listado_paginas/conexion.class.php');

class grilla_pag{
	var $con;

	function grilla_pag(){
		$this->con=new DBManager;
		}
	function mostrar_grilla($idpr){
		if($this->con->conectar()==true){
	   return  mysql_query("SELECT * FROM paginas WHERE id_proyecto='".$idpr."'");

				}
			}
	function eliminar_pag($id_pag){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM paginas WHERE id_pagina='".$id_pag."'");
		}
	}
	}
?>
