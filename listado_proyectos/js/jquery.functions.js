	function ActualizarDatos(){
		var proy_id = $('#proy_id').attr('value');
		var nombre_proy = $('#nombre_proy').attr('value');
		var creador_proy = $('#creador_proy').attr('value');
		var fecha_proy = $('#fecha_proy').attr('value');
		var modif_proy = $('#modif_proy').attr('value');

		$.ajax({
			url: 'actualizar.php',
			type: "POST",
			data: "submit=&nombre_proy="+nombre_proy+"&creador_proy="+creador_proy+"&fecha_proy="+fecha_proy+"&modif_proy="+modif_proy+"&proy_id="+proy_id,
			success: function(datos){
				alert(datos);
				ConsultaDatos();
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}

	function ConsultaDatos(){
		$.ajax({
			url: 'consulta.php',
			cache: false,
			type: "GET",
			success: function(datos){
				$("#tabla").html(datos);
			}
		});
	}

	function EliminarDato(proy_id){
		var msg = confirm("Desea eliminar este dato?")
		if ( msg ) {
			$.ajax({
				url: 'eliminar.php',
				type: "GET",
				data: "id="+proy_id,
				success: function(datos){
					alert(datos);
					$("#fila-"+proy_id).remove();
				}
			});
		}
		return false;
	}

	function GrabarDatos(){
		var nombre_proy = $('#nombre_proy').attr('value');
		var creador_proy = $('#creador_proy').attr('value');
		var fecha_proy = $('#fecha_proy').attr('value');
		var modif_proy = $('#modif_proy').attr('value');

		$.ajax({
			url: 'nuevo.php',
			type: "POST",
			data: "submit=&nombre_proy="+nombre_proy+"&creador_proy="+creador_proy+"&fecha_proy="+fecha_proy+"&modif_proy="+modif_proy,
			success: function(datos){
				ConsultaDatos();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}

	function Cancelar(){
		$("#formulario").hide();
		$("#tabla").show();
		return false;
	}

	// funciones del calendario
	function update_calendar(){
		var month = $('#calendar_mes').attr('value');
		var year = $('#calendar_anio').attr('value');

		var valores='month='+month+'&year='+year;

		$.ajax({
			url: 'calendario.php',
			type: "GET",
			data: valores,
			success: function(datos){
				$("#calendario_dias").html(datos);
			}
		});
	}

	function set_date(date){
		$('#fecha_nacimiento').attr('value',date);
		show_calendar();
	}

	function show_calendar(){
		$('#calendario').toggle();
	}
