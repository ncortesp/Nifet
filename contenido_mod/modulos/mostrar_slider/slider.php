<meta charset="utf-8">
<script src="jquery.min.js"></script>

<style>
#slideshow {

    position: relative;
    width: 100%;
    height: 100%;

    box-shadow: 0 0 20px rgba(0,0,0,0.4);
}

#slideshow > div {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
}
</style>
<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>

</div>

</div>

<script type="text/javascript">
//cre  cotenedores de  slider

function cantidad_fotos(){
	var cantidad_fotos =document.getElementById('cantidad_fotos').value;


	var cont;

//recibe value de cantidad  de fotos que  se quiere tratar  y creamos contenedores  para hacer la estructura

	var form_foto=document.createElement('form');
	document.getElementById('panel_slider').innerHTML='';
	document.getElementById('slideshow').innerHTML='';


	document.getElementById('panel_slider').appendChild(form_foto);
	form_foto.setAttribute('method','get');

	//contenedor  slider   padre de todos lo padres slider  de true slider
	var contenidoslideshow = document.createElement('div');
	form_foto.appendChild(contenidoslideshow);

	for ( cont =1 ; cont<=cantidad_fotos;cont++ ){

		var nombrecampo = document.createElement('div');
		form_foto.appendChild(nombrecampo);
		var texto = document.createTextNode("Imagen"+cont);
		nombrecampo.appendChild(texto);

    	var input_foto= ce('input','');
		input_foto.setAttribute('type','file');
		input_foto.setAttribute('id',"box_file"+cont);
		input_foto.setAttribute("onchange","mostrar_id("+cont+")");
	  	nombrecampo.appendChild(input_foto);


	}
}
    function  mostrar_id(cont){
	 alert(cont);
	 var div_imagen = document.createElement('div');

	 div_imagen.setAttribute('id',"img_"+cont);


	 document.getElementById('slideshow').appendChild(div_imagen);
	 src_input =document.getElementById('box_file'+cont).value;

	 var separado= src_input.split(String.fromCharCode(92));
	 alert(separado[2]);
	 var src_imagen="img/"+separado[2];

	 a_directorio(src_imagen,src_input);



	 var insertar_imagen = document.createElement('img');
	 insertar_imagen.setAttribute('id',"img"+cont);
	 insertar_imagen.style.width= "100%";
	 insertar_imagen.style.height= "100%";
     insertar_imagen.setAttribute('src',src_imagen);


     document.getElementById('img_'+cont).appendChild(insertar_imagen);



	 }


	function a_directorio(nombre_img,nombre_completo){

	var parametros = {
                "nombre_img" : nombre_img ,
				"nombre_completo":nombre_completo
        };
        $.ajax({
                data:  parametros,
                url:   'guardar_imagen.php',
                type:  'POST',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
				error: function(xhr, textStatus, errorThrown) {
                    alert('Error: ' + xhr.responseText);
                },
                success:  function (response) {
                        alert(response);

                }
        });


		}

		//color marco  de slide
		function color_marco(valorvalue){

	 document.getElementById('contenidoslideshow').style.backgroundColor=valorvalue;


	}




//no tocar
function ce(tag,name){
  var element;
  if (name && window.ActiveXObject){
    element = document.createElement('<'+tag+' name="'+name+'">');
  }else{
    element = document.createElement(tag);
    element.setAttribute('name',name);
  }
  return element
  };
// no tocar


</script>


<select  id="cantidad_fotos" name="cantidad_fotos" onchange="cantidad_fotos()">
  <option value="0" selected="selected" disabled="disabled">Seleccionar</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select>
Color marco  <input type="color" name="color_marco" onChange="color_marco(this.value)">
<div id="contenidoslider">
<div id="slider">
<div id="panel_slider" style="background-color:#666;">

</div>
<div id="mostrar_slider" style="width:400px;height:200px;">
	<div id="contenidoslideshow" style="background-color:#000">
			<div id="slideshow">
            </div>
	</div>
</div>
</div>

