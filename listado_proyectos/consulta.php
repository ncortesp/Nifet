<?php
require('clases/cliente.class.php');
$objCliente=new Cliente;
$consulta=$objCliente->mostrar_clientes();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Listado de Proyectos</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no"/>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
    <link href="css/footable-demos.css" rel="stylesheet" type="text/css"/>
    <script src="../js/jquery-1.11.1.js" type="text/javascript"></script>

    <script>
        if (!window.jQuery) { document.write('<script src="js/jquery-1.9.1.min.js"><\/script>'); }
    </script>
    <script src="js/footable.js?v=2-0-1" type="text/javascript"></script>
	<script src="js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
	<script src="js/bootstrap-tab.js" type="text/javascript"></script>
  
</head>
<body>
	<div class="demo-container">
        <div class="tab-content">
			<div class="tab-pane active" id="demo">
                Elementos a mostrar:
                <select id="change-page-size">
                					
					<option value="2">2</option>
					<option value="3">3</option>
                    <option value="5">5</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                </select>
				Tamaño Paginador:
				<select id="change-nav-size">
					<option value="0">Ninguno</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
				<table class="table demo" data-page-size="2">
					<thead>
						<tr>
							<th data-toggle="true">
								Nombre Proyecto
							</th>
							<th>
								Fecha
							</th>
							<th data-hide="phone,tablet">
								Fecha Modificación
							</th>
							<th data-hide="phone,tablet">
								Editar
							</th>
							<th data-hide="phone,tablet">
								Eliminar
							</th>
                             <?php
if($consulta) {
	while( $cliente = mysql_fetch_array($consulta) ){
	?>
						</tr>
					</thead>
					<tbody>
						<tr class="vcard"  id="fila-<?php echo $cliente['id_proyecto'] ?>">
							<td scope="row" class="n" data-title="Nombre Proyecto"><?php echo $cliente['nombre_proy'] ?></td>
			<td data-title="Fecha"><?php echo $cliente['fecha_proy'] ?></td>
			<td data-title="Fecha de Modificación"><?php echo $cliente['modif_proy'] ?></td>
			<td data-title="lista_pagina"><span class=""><a  href="../listado_paginas/listadopag.php?ruta=<?php echo $cliente['url_carpeta'];?>&nombre=<?php echo $cliente['nombre_proy'];?>&id=<?php echo $cliente['id_proyecto']; ?>"><img src="img/database_edit.png" title="Editar" alt="Editar" /></a></span></td>
            <td data-title="Eliminar"><span class="dele"><a onClick="EliminarDato(<?php echo $cliente['id_proyecto'] ?>); return false" href="eliminar.php?id=<?php echo $cliente['id_proyecto']; ?>"><img src="img/delete.png" title="Eliminar" alt="Eliminar" /></a></span>
            </td>
						</tr>
						
					</tbody>	<?php
	}
}
?>
					<tfoot>
						<tr>
							<td colspan="5">
								<div class="pagination pagination-centered"></div>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		
		
    <script type="text/javascript">
        $(function () {
			$('table').footable();

					$('#change-page-size').change(function (e) {
						e.preventDefault();
						var pageSize = $(this).val();
						$('.footable').data('page-size', pageSize);
						$('.footable').trigger('footable_initialized');
					});

					$('#change-nav-size').change(function (e) {
						e.preventDefault();
						var navSize = $(this).val();
						$('.footable').data('limit-navigation', navSize);
						$('.footable').trigger('footable_initialized');
					});
        });
    </script>
</body>
</html>
