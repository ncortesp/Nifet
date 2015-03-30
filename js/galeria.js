	  	function Galeria(id,id_grilla){

        $.ajax({

                url:   'popupimg/php/leerimg.php',
				data:	'id='+id,
                type:  'GET',
                processData : false,
                   contentType : false,
				   beforeSend: function () {
						document.getElementById(id_grilla).innerHTML = 'Espera, se está cargando las imágenes...';
                },
                   success : function(res){
                       document.getElementById(id_grilla).innerHTML = res;
                   }
        	});
		}


		function getCookie(cname) {
    		var name = cname + "=";
    		var ca = document.cookie.split(';');
    		for(var i=0; i<ca.length; i++) {
        	var c = ca[i].trim();
        		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    			}
    		return "";
		}
		function elegirImagen(id_imagen,ruta,id_div){
			var ruta_r;
			var id;
			document.cookie="IDSeleccionada="+id_imagen+"";
			document.cookie="rutaSeleccionada="+ruta+"";
			id= getCookie('IDSeleccionada');
			ruta_r= getCookie('rutaSeleccionada');

			document.getElementById(id_div).style.backgroundImage="url('"+ruta_r+"')";
		}
