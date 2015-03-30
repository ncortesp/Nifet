$(window).load(function(){

 $(function() {
  $('#file-input').change(function(e) {
      addImage(e);
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;

      if (!file.type.match(imageType))
       return;

      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }

     function fileOnload(e) {
      var result=e.target.result;
      $('#vpimgSalida').attr("src",result);
     }
    });
  });
 //comprobar subida listener
  $( "#enviarAlContenedor" ).bind( "click", function() {
		compruebaSubida();
	});

	function compruebaSubida(){
		cosa = document.getElementById('imgSalida').src
		exte = cosa.split('.');

		if(exte[1] != 'jpg' && exte[1] != 'png' && exte[1] != 'gif'){
			alert('Recuerda subir la imagen del header');
	  	}
	}


function cargar_imagen(){
  $('#file-input').change(function(e) {
      addImage(e);

     });


     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;

      if (!file.type.match(imageType))
       return;

      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }

     function fileOnload(e) {
      var result=e.target.result;
      $('#vpimgSalida').attr("src",result);
     }

}
function sube(nombre,archivo){

	var parametros = {
                "nombre" : nombre,
				"archivo": archivo
        };
        $.ajax({
                data:  parametros,
                url:   'modulos/banner/guardar.php',
                type:  'POST',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
				error: function(xhr, textStatus, errorThrown) {
                    alert('Error: ' + xhr.responseText);
                },
                success:  function (response) {
                        actualiza_foto(response);

                }
        });
	}

	function actualiza_texto(t){
		/*var dtexto = document.createElement('div');
			dtexto.setAttribute("id","tituloHeader");*/
		var dtexto = document.getElementById("tituloheader");
		var pp = document.createElement('div');
/*		pp.style.paddingTop = '10%';
		pp.style.textAlign = '-webkit-center';*/
			pp.style.margin = '10%';
		var texto = document.createTextNode(t);
		$(pp).html(texto);
		$("#tituloheader").html(pp);
		//vista previa
		var dtexto = document.getElementById("vptituloheader");
		var pp = document.createElement('div');
		pp.style.margin = '10%';
		var texto = document.createTextNode(t);
		$(pp).html(texto);
		$("#vptituloheader").html(pp);

	}

	function cambia_tama(v){

		document.getElementById("tituloheader").style.fontSize= v;
		document.getElementById("vptituloheader").style.fontSize= v;
	}
	function cambia_fuente(v){

		document.getElementById("tituloheader").style.fontFamily= v;
		document.getElementById("vptituloheader").style.fontFamily= v;
		}
	function cambia_colortexto(v){
		document.getElementById("tituloheader").style.color= v;
		document.getElementById("vptituloheader").style.color= v;
		}

	function actualiza_foto(f){
		alert(f);
		var ruta = f.split(',');
		if(ruta[1]){
			document.getElementById('imgSalida').src = ruta[1];
		}
		else{
			alert("que sucede?");
		}
	}

