<?php
require('functions.php');
if(isset($_POST['submit'])){
	require('clases/cliente.class.php');

	$nombre_proy = htmlspecialchars(trim($_POST['nombre_proy']));
	$creador_proy = htmlspecialchars(trim($_POST['creador_proy']));

	$objCliente=new Cliente;
	if ( $objCliente->insertar(array($nombre_proy,$creador_proy)) == true){

		include ('../seleccion.php');
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	}
}else{
?>
<html>
<head>

<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>
<body>
<form id="frmClienteNuevo" name="frmClienteNuevo" method="post" action="nuevo.php" onsubmit="GrabarDatos();">
  <p><label>nombre_proy<br />
  <input class="text" type="text" name="nombre_proy" id="nombre_proy" />
  </label>
  </p>
  <p>
    <label>creador_proy<br />
    <input class="text" type="text" name="creador_proy" id="creador_proy" />
    </label>
  </p>

  <p>
    <input type="submit" name="submit" id="button" value="Enviar" />
    <label></label>
    <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
  </p>
</form>
</body>
</html>
<?php

}


?>
