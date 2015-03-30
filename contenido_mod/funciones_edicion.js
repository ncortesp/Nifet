// JavaScript Document
/*llamar a pagina de usuario.*/

var visor = document.getElementById('visor');
var iframe1=document.createElement('iframe');
/*var rutaC = rutaContenido;*/
	if(rutaContenido == null){
		iframe1.setAttribute('src','/nifet_ultimo_avanzado/carpeta_usuarios/ncortesp/666/index.php');
	}
	else{
		iframe1.setAttribute('src','/nifet_ultimo_avanzado/'+rutaContenido+'/index.html');
	}
iframe1.setAttribute('id','vistaP');
iframe1.setAttribute('class','scrollbar');
iframe1.setAttribute('frameborder','0');
iframe1.setAttribute('overflow-x','hidden');
iframe1.setAttribute('scrolling','yes');


iframe1.setAttribute('width','100%');
iframe1.setAttribute('height','600px');
visor.appendChild(iframe1);

function crearGadget(nombre,destinoC){
	//Esta funcion culia comprueba que no se haya creado el widget previamente para no mostrarlo repetido.

	if(existe(nombre) == true){
		/*alert("existe le div y no lo pienso crear!!!!");	*/
		alert("El widget ya se encuentra creado. buscalo mas abajo :)");
	}
	else{
		/*alert("no existe el div");*/
		crearGadget2(nombre,destinoC);
	}
}

function crearGadget2(nombre,destinoC){

	/*
		nombre 		->  nombre del widget y de su widget.html
		destinoC 	->  opciones de target para el widget:
						1 -> derecho , izquierdo , central*
						2 -> header
						3 -> menu
						4 -> footer
	*/

var herramientas=document.getElementById('herramientas');
/*var fieldset1=document.createElement('fieldset');*/

var ul1=document.createElement('ul');
ul1.className='lulu';
ul1.setAttribute('id','accordion');
	herramientas.appendChild(ul1);

var li1=document.createElement('li');
li1.setAttribute('id','lili');
ul1.appendChild(li1);

var a1=document.createElement('a');
a1.setAttribute('id','acherefe');
a1.setAttribute('href','#tab'+nombre);
li1.appendChild(a1);

var h21=document.createElement('h2');
a1.appendChild(h21);

var txt3=document.createTextNode(nombre);
h21.appendChild(txt3);

var fieldset1=document.createElement('div');
fieldset1.setAttribute('id','tab'+nombre);
fieldset1.className='contento';
li1.appendChild(fieldset1);





/*vista previa widget*/
var vpw=document.createElement('div');
	vpw.setAttribute('id','vp'+nombre);
	fieldset1.appendChild(vpw);

/*crea opciones de div */

switch(destinoC){
	case '1': {
			var select1=document.createElement('select');
			fieldset1.appendChild(select1);
			select1.setAttribute('id','select'+nombre);
			select1.onchange=function(){traspaso('select'+nombre)};
			var option1=document.createElement('option');
			option1.setAttribute('value','null');
			option1.setAttribute('selected','selected');
			option1.setAttribute('disabled','disabled');
			select1.appendChild(option1);
			var txt2=document.createTextNode('Elegir');
			option1.appendChild(txt2);
			var option2=document.createElement('option');
			option2.setAttribute('value','box_left');
			select1.appendChild(option2);
			var txt4=document.createTextNode('Contenedor Izquierdo');
			option2.appendChild(txt4);
			var option3=document.createElement('option');
			option3.setAttribute('value','box_right');
			select1.appendChild(option3);
			var txt6=document.createTextNode('Contenedor Derecho');
			option3.appendChild(txt6);

			if(existeCentral()){
				var option4=document.createElement('option');
				option4.setAttribute('value','central');
				select1.appendChild(option4);
				var txt8=document.createTextNode('Central');
				option4.appendChild(txt8);
			}


	}break;
	case '2':{
			var select1=document.createElement('select');
			fieldset1.appendChild(select1);
			select1.setAttribute('id','select'+nombre);
			select1.onchange=function(){traspaso('select'+nombre)};
			var option1=document.createElement('option');
			option1.setAttribute('value','null');
			option1.setAttribute('selected','selected');
			option1.setAttribute('disabled','disabled');
			select1.appendChild(option1);
			var txt2=document.createTextNode('Elegir');
			option1.appendChild(txt2);
			var option2=document.createElement('option');
			option2.setAttribute('value','header');
			select1.appendChild(option2);
			var txt4=document.createTextNode('Header');
			option2.appendChild(txt4);

	}break;

		case '3':{
			var select1=document.createElement('select');
			fieldset1.appendChild(select1);
			select1.setAttribute('id','select'+nombre);
			select1.onchange=function(){traspaso('select'+nombre)};
			var option1=document.createElement('option');
			option1.setAttribute('value','null');
			option1.setAttribute('selected','selected');
			option1.setAttribute('disabled','disabled');
			select1.appendChild(option1);
			var txt2=document.createTextNode('Elegir');
			option1.appendChild(txt2);
			var option2=document.createElement('option');
			option2.setAttribute('value','menu');
			select1.appendChild(option2);
			var txt4=document.createTextNode('Menu');
			option2.appendChild(txt4);

	}break;

		case '4':{

			var select1=document.createElement('select');
			fieldset1.appendChild(select1);
			select1.setAttribute('id','select'+nombre);
			select1.onchange=function(){traspaso('select'+nombre)};
			var option1=document.createElement('option');
			option1.setAttribute('value','null');
			option1.setAttribute('selected','selected');
			option1.setAttribute('disabled','disabled');
			select1.appendChild(option1);
			var txt2=document.createTextNode('Elegir');
			option1.appendChild(txt2);
			var option2=document.createElement('option');
			option2.setAttribute('value','footer');
			select1.appendChild(option2);
			var txt4=document.createTextNode('Footer');
			option2.appendChild(txt4);

	}break;
}

/*var select1=document.createElement('select');
fieldset1.appendChild(select1);
var option1=document.createElement('option');
option1.setAttribute('value','div_hola');
select1.appendChild(option1);
var txt4=document.createTextNode('Div');
option1.appendChild(txt4);*/
/*fin opciones de div*/


/*fin */

/*cargar widget*/
	addJavascript('modulos/'+nombre+'/'+nombre+'js.js','head');

	var widget;

	$.get("modulos/"+nombre+"/"+nombre+".html",function(data,status,xhr){
	 /* alert("Data: " + data +"\nXHR: " + xhr);*/
	  widget = data;
	  agregarmod(widget,'vp'+nombre);
	});
/*fin cargar widget*/
	var id_widget = 'contenido'+nombre;
	var id_sel = 'select'+nombre;


var button2=document.createElement('button');
		button2.setAttribute('class','botoncito');
		button2.setAttribute('id','enviarAlContenedor');
		button2.onclick=function(){crearDiv(document.getElementById(id_widget).innerHTML,document.getElementById(id_sel).value)};
	fieldset1.appendChild(button2);
	var txt8=document.createTextNode('Agregar');
	button2.appendChild(txt8);



	var button1=document.createElement('button');
		button1.setAttribute('class','botoncito');
		button1.onclick=function(){elimina(document.getElementById(id_sel).value,nombre)};
	fieldset1.appendChild(button1);
	var txt6=document.createTextNode('Eliminar');
	button1.appendChild(txt6);
	//agregar todo el widget a la vista de edicion (?)
	$('div'+nombre).append(fieldset1);


}

function existe(leDiv){

	if(document.getElementById(leDiv)){
		/*alert("existe el central");*/
		return true;
	}
	else{
		/*alert("No existe el central");*/
		return false;
	}
}

function existeCentral(){
	var iframe = document.getElementById('vistaP');

	if(iframe.contentWindow.document.getElementById('central')){
		/*alert("existe el central");*/
		return true;
	}
	else{
		/*alert("No existe el central");*/
		return false;
	}
	/*
var input= iframe.contentWindow.document.getElementById('header');
	input.style.backgroundColor = "blue";
	input.style.height = "600px";*/
}

function agregarmod(widget,div){
	document.getElementById(div).innerHTML = widget;

}

function traspaso(enviar){
	/*alert(enviar);*/
}

function crearDiv(texto,div_target){
	if(div_target == 'null'){
		alert("seleccione el lugar para colocar su Widget :)");
	}else{
	var iframe = document.getElementById('vistaP');
	var input= iframe.contentWindow.document.getElementById(div_target);
		input.innerHTML = texto;
	}

}


function addJavascript(jsname,pos) {
	/*Agrega el javascript requerido por el widget seleccionado*/
	var th = document.getElementsByTagName(pos)[0];
	var s = document.createElement('script');
	s.setAttribute('type','text/javascript');
	s.setAttribute('src',jsname);
	th.appendChild(s);
}

function elimina(div,nombre){

	// Removing a specified element when knowing its parent node
	var iframe = document.getElementById('vistaP');

		var i;
		for(i=0 ; i< iframe.contentWindow.document.getElementById(div).childNodes.length;i++){
				if (iframe.contentWindow.document.getElementById(div).childNodes.item(i).id != nombre){

				} else {
					padre = iframe.contentWindow.document.getElementById(div);
					padre.removeChild(iframe.contentWindow.document.getElementById(div).childNodes.item(i));
				}
		}

}

function eliminaWidget(padre,eliminar){
	// Removing a specified element when knowing its parent node
		var i;
		for(i=0 ; i< document.getElementById(div).childNodes.length;i++){
				if (document.getElementById(div).childNodes.item(i).id != eliminar){
					/*alert("El elemento selecionado no existe");*/
				} else {
					padre = document.getElementById(div);
					padre.removeChild(document.getElementById(div).childNodes.item(i));
				}
		}
}

function eliminaR(div_padre,hijo){
	// Removing a specified element when knowing its parent node

		var i;
		for(i=0 ; i< document.getElementById(div_padre).childNodes.length;i++){
				if (document.getElementById(div_padre).childNodes.item(i).id != hijo){
					/*alert("El elemento selecionado no existe");*/
				} else {
					padre = document.getElementById(div_padre);
					padre.removeChild(document.getElementById(div_padre).childNodes.item(i));
				}
		}

}

function guardarproyecto(){
		var iframe = document.getElementById('vistaP');
		nombrevariable = iframe.contentWindow.document.getElementsByTagName("html");
		var acheteemeele = nombrevariable[0].innerHTML;

		//guardar el html en php
		var parametros = {
                "div_id" : acheteemeele
        };
        $.ajax({
                data:  parametros,
                url:   'guardar_final.php',
                type:  'POST',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
				error: function(xhr, textStatus, errorThrown) {
                    alert('Error: ' + xhr.responseText);
                },
                success:  function (response) {
                        //alert(response);
						$(location).attr('href','descargar.php');
                }
        });


}


