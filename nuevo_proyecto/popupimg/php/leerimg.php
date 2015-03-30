
<?php

include('../clase/claseimg.php');

	@$id_div = $_GET['id'];


session_start();



@$id_proyecto=$_SESSION['id_proyecto'];


$objmostrar=new	subirimg;
$ver=$objmostrar->mostrar_img($id_proyecto);

if($ver){

	while ( $subirimg = mysql_fetch_array($ver)){

		/* $ima = '../../'.$subirimg['ruta'];*/
		/*ruta absoluta , cambiar al subir al servidor por la ruta absoluta ej: http//mipagina.com/ IMPORTANTE IMPORTANTE IMPORTANTE*/
		$ima = 'http://localhost/nifet_ultimo_avanzado/'.$subirimg['ruta'];
		?>
	<table  style='width:108px; height=75px; float:left; margin:10px 10px 0 0;''>
  <tr>

   <td colspan='2'> <a><img src='<?php echo $ima; ?>' width='100px' height='75px' onClick="elegirImagen('<?php echo $subirimg['id_img'] ?>','<?php echo $ima; ?>','<?php echo $id_div; ?>')"></a> </td>
  </tr>

  <tr>
    <?php
			if($id_div == NULL){
			?> <td id="botoneliminar" data-title="Eliminar"><span class="dele"><a onClick="EliminarDato(<?php echo $subirimg['id_img'] ?>); return false" href="clase/eliminar.php?id_img=<?php echo $subirimg['id_img'] ?>"><img src="/nifet2/images/delete.png" title="Eliminar" alt="Eliminar" /></a></span></td><?php
			}
	?>


  </tr>

</table>

	<?php



	}

}
/////////////////////////////




?>


