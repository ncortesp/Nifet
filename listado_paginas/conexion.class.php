<?php

class DBManager{

	var $conect;

	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;

	function DBManager(){
		$this->BaseDatos = "sistema";
		$this->Servidor = "localhost";
		$this->Usuario = "root";
		$this->Clave = "12345";
	}

	 function conectar() {
		if(!($con=@mysql_connect($this->Servidor,$this->Usuario,$this->Clave))){
			echo"<h1> [:(] Error al conectar a la base de datos</h1>";
			exit();
		}
		if (!@mysql_select_db($this->BaseDatos,$con)){
			echo "<h1> [:(] Error al seleccionar la base de datos</h1>";
			exit();
		}
		mysql_set_charset("utf8",$con);
		$this->conect=$con;
		return true;

	}

}
?>