// JavaScript Document


$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);

//cre  cotenedores de  slider
alert("dlfkgjfdglkfdjg");
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


