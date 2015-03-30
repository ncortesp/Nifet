
<form id="form1" name="form1" method="post" action="">
  <label for="textfield"></label>
  <input type="text" name="textfield" id="textfield" />
  <input type="submit" name="button" id="button" value="Enviar" />
</form>



<?php
@$id=$_POST['textfield'];


include('listado_proyectos/clases/conexion.class.php');

class mostrar_elemento{
	var $con;
	function mostrar_elemento(){
		$this->con=new DBManager;
	}
	function con_proy($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM tbl_users WHERE tx_nombre=".$id);
			}
		}
	}

$objMostrar=new mostrar_elemento;
$sql=$objMostrar->con_proy($id);


if($sql)
	while($mostrar=mysql_fetch_array($sql)){
		echo $mostrar['tx_nombre'];
		}


 ?>
