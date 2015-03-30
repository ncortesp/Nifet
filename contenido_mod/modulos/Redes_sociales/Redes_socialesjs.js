

function ce(tag,name){
  var element;
  if (name && window.ActiveXObject){
    element = document.createElement('<'+tag+' name="'+name+'">');
  }else{
    element = document.createElement(tag);
    element.setAttribute('name',name);
  }
  return element;
};


	//agregar y desagregar elementos

function fondo_redes(value){

document.getElementById('Redes_sociales').style.backgroundColor=value;
}

function  agregar_elemento(elemento){

	var color_icono = document.getElementById('seleccion_color').value;
	var check= document.getElementById(elemento).checked;
	var  padre = document.getElementById('Redes_sociales').id;


	switch (check){
	case true  : agregar(elemento,padre,color_icono);
				 break;
	case false : borrar(elemento,padre);
	             break;

				 }

}

function agregar(elemento,padre,color_icono){

			var div_redes =  document.createElement('div');
			var ide= "icon_"+elemento;
		    div_redes.setAttribute('id',ide);

		    div_redes.style.width='100px';
		    div_redes.style.height='100px';
		    div_redes.style.cssFloat='left';
		    document.getElementById(padre).appendChild(div_redes);


			var a_red =document.createElement('a');
			a_red.setAttribute('id',"a_"+elemento);

			div_redes.appendChild(a_red);


			var icono = document.createElement('img');
			icono.setAttribute('src',"blanco/"+elemento+color_icono+".png");
			icono.setAttribute('id',"blanco/"+elemento+color_icono);
			icono.style.width='100%';
			icono.style.height='100%';
			a_red.appendChild(icono)


			//crea campos de texto.  creamos un div   que contenga el input text  y el texto referente a la red social
			var div_red=document.createElement('div');
			div_red.setAttribute('id',"div_"+elemento);
			document.getElementById('panel_redes').appendChild(div_red);


			var nombre_red= document.createTextNode(elemento);
			document.getElementById("div_"+elemento).appendChild(nombre_red);
			var campo_text = ce('input','');
		    campo_text.setAttribute("onchange","agregar_href('"+elemento+"')");
			campo_text.setAttribute('id',"input_"+elemento);
		    document.getElementById("div_"+elemento).appendChild(campo_text);







	}

function agregar_href(elemento){




 var input_a=document.getElementById("input_"+elemento).value;
 var alink="http://www."+elemento+".com/"+input_a;
 alert(alink)
 var acheref= document.getElementById("a_"+elemento);
 acheref.setAttribute('href',alink);

 var contenedor=document.getElementById("div_"+elemento);

 var linked=document.createTextNode(alink);
 contenedor.appendChild(linked);







	}



function borrar(elemento,padre)
{



var borrar="icon_"+elemento;
var  papi= document.getElementById(borrar);

	 papi.parentNode.removeChild(papi);
//borrar  input

var input_nombre= "input_"+elemento;
var input_papi=document.getElementById("div_"+elemento);
    input_papi.parentNode.removeChild(input_papi);



}

function transparente(id_input){
	var color_icono = document.getElementById('Redes_sociales');
	var check= document.getElementById(id_input).checked;
	if(check == true){
		color_icono.style.backgroundColor= "transparent";
		}else{
		color_icono.style.backgroundColor= "grey";
			}
	}
