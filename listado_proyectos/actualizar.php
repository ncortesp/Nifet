
<?php
require('functions.php');
if(isset($_POST['submit'])){
	require('clases/cliente.class.php');
	$objCliente=new Cliente;

	$proy_id = htmlspecialchars(trim($_POST['proy_id']));
	$nombre_proy = htmlspecialchars(trim($_POST['nombre_proy']));
	$creador_proy = htmlspecialchars(trim($_POST['creador_proy']));
	$modif_proy = htmlspecialchars(trim($_POST['modif_proy']));

	if ( $objCliente->actualizar(array($nombre_proy,$creador_proy,$modif_proy),$proy_id) == true){
		echo 'Datos Actualizados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	}
}else{
	if(isset($_GET['id'])){

		require('clases/cliente.class.php');
		$objCliente=new Cliente;
		$consulta = $objCliente->mostrar_cliente($_GET['id']);
		$cliente = mysql_fetch_array($consulta);
	?>

<html>
<head>

<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
redireccionar   donde  que quiero  actualizar
</body>
</html>
	<?php
	}
}
?>
