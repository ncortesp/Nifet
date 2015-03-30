<script src="../js/jscolor.js" type="text/javascript"></script>
<script src="../js/jquery-1.6.3.min.js" type="text/javascript"></script>

<script>

function desocultar(id){
	document.getElementById(id).style.display='list-item';

	}
function ocultar(id){
	document.getElementById(id).style.display='none';

	}


function cambiaResolucion(value){
	var wrapper_alto = document.getElementById('wrapper').style.width;
	var wrapper_ancho = document.getElementById('wrapper').style.height;

	switch(value){
		case '1':
			wrapper_ancho= "100%";
			wrapper_alto= "";
			break;
		case '2':
			wrapper_alto="";
			wrapper_ancho="90%";
			break;
		case '3':
			wrapper_ancho="80%";
			wrapper_alto="";
			break;
		case '4':
			wrapper_ancho="70%";
			wrapper_alto="";
			break;
		case '5':
			wrapper_ancho="60%";
			wrapper_alto="";
			break;
		}
	document.getElementById('wrapper').style.height = wrapper_alto;
	document.getElementById('wrapper').style.width = wrapper_ancho;
	}


function cambiaAlineacion(value){
	var alinea = document.getElementById('wrapper').style.cssFloat;
	var centrar = document.getElementById('wrapper').style.marginTop;


	switch(value){


		case '1':
			alinea = 'left';
		break;

		case '2':
			alinea = 'right';
		break;

		case '3':
			alinea = 'none';
			centrar = '0';
		break;

		default:
			alert("opcion no valida");
		break;
	}
	document.getElementById('wrapper').style.cssFloat = alinea;
	document.getElementById('wrapper').style.marginTop = centrar;
}


function cambiaColor(entrada,salida){
		 color = document.getElementById(entrada).style.backgroundColor; /*en ves de ingresar al value, ingreso al css*/
		 divObj= document.getElementById(salida);
		 divObj.style.backgroundImage = "";
		 divObj.style.backgroundColor = color;

	}

function imgPatron(){
	document.getElementById('obj').innerHTML="";
	img = document.createElement('div');
	img.setAttribute('id','img_patron');
	img.style.width = "400px";
	img.style.height = "280px";
	img.style.border = "dashed";

	document.getElementById('obj').appendChild(img);

	for(x=1; x<=8; x++){

	grilla = document.createElement('div');
	grilla.setAttribute('id','grilla_patron');
	grilla.style.width = "130 px";
	grilla.style.height = "130 px";
	grilla.style.margin = "1px";
	grilla.style.cssFloat ="left";
	grilla.style.cursor = "pointer";
	document.getElementById('img_patron').appendChild(grilla);


	pic = document.createElement('img');
	pic.src = 'img_patron/img'+x+'.png';
	pic.height = "130";
	pic.width = "130";
	pic.setAttribute('id','img_patron'+x);
	pic.setAttribute("onClick","imgWrapper('img_patron/img"+x+".png','img_patron"+x+"', 'wrapper' ),imgWrapper('img_patron/img"+x+".png','img_patron"+x+"', 'general' ),eliminarGrilla();")
	grilla.appendChild(pic);
	}
	}

function imgWrapper(ruta,inicio,destino){
	ruta = document.getElementById(inicio).src;
	divObj= document.getElementById(destino);
	divObj.style.background = "url('"+ruta+"')";
	}

function eliminarGrilla(){
	document.getElementById('obj').innerHTML= "";
	}
function abrir(){
	window.open("contenedores/pagina.php","","width=250px, heigth=250px");
	}

function moverMargensup(valorrango,id_destino,imprimirvalor){
	var mar = document.getElementById(id_destino);

mar.style.paddingTop=valorrango+"px" ;
document.getElementById(imprimirvalor).innerHTML = valorrango + "px";
	}
	<!-- abrir pop up --!
function abrirVentana() {
window.open("popupimg/galeria.php","","width=550,height=480,scrollbars=yes,location=no,menubar=no,status=no,toolbar=no")
}
<!-- fin pop up --!

function borderedondo(valorrango,id_destino,imprimirvalor){
var bor = document.getElementById(id_destino);

bor.style.borderRadius=valorrango+"px" ;
document.getElementById(imprimirvalor).innerHTML = valorrango + "px";
	}
function margensuperior(valorrango,id_destino,imprimirvalor){
	var marsup = document.getElementById(id_destino);

	marsup.style.marginTop=valorrango+"%";
	document.getElementById(imprimirvalor).innerHTML = valorrango + "%";
	}
function margeninferior(valorrango,id_destino,imprimirvalor){
	var marsup = document.getElementById(id_destino);

	marsup.style.marginBottom=valorrango+"%";
	document.getElementById(imprimirvalor).innerHTML = valorrango + "%";
	}
function margensupcentral(valorrango,id_destino,imprimirvalor){
	var marsupcen = document.getElementById(id_destino);
	marsupcen.style.marginTop=valorrango+"%";
	document.getElementById(imprimirvalor).innerHTML= valorrango+"%";
	}
</script>
<style>
label > input{ /* HIDE RADIO */
  display:none;
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}
</style>
<fieldset>
<legend><strong>General</strong></legend>

    <label>Tipo Plantilla</label>
<table class="tablaplantilla">
      <tr>
        <td><label><img src="tipoplantilla/1.png"><input id="p1" type="radio" name="plantilla_1" value="radio" onClick="cambiaTemplate('1')"/></label></td>
        <td><label><img src="tipoplantilla/2.png"><input id="p2" type="radio" name="plantilla_2" value="radio" onClick="cambiaTemplate('2')"/></label></td>

    </tr>
      <tr>
        <td><label><img src="tipoplantilla/3.png"><input id="p3" type="radio" name="plantilla_3" value="radio" onClick="cambiaTemplate('3')"/></label></td>
        <td><label><img src="tipoplantilla/4.png"><input id="p4" type="radio" name="plantilla_4" value="radio" onClick="cambiaTemplate('4')"/></label></td>

    </tr>
    </table>
<hr>
  <p>
      <label>Tamaño de Pantalla</label>


	<select name="resolucion" onchange="cambiaResolucion(value);">
  		<option value="0" selected="selected" disabled="disabled">Elegir</option>
  		<option value="1">Ancho de Pantalla</option>
    	<option value="2">90% de Pantalla</option>
    	<option value="3">80% de Pantalla</option>
        <option value="4">70% de Pantalla</option>
    	<option value="5">60% de Pantalla</option>
</select>
  <hr>
</p>
  <label>Alineación</label>
  <select name="align" onchange="cambiaAlineacion(value)">

        <option value"0" selected="selected" disabled="disabled">Elegir</option>
        <option value="1">Izquierda</option>
        <option value="2">Derecha</option>
        <option value="3">Centrado</option>
      </select>
  <hr>
    <label>Color Fondo</label>
    <input name="color_general" class="color" id="general1" onchange="cambiaColor('general1','general');" size="4"/>

<hr>
 <label>Margen Superior</label>
 <input type="range" id="rango" onChange="moverMargensup(this.value,'general','valormargensupgen');" value="0" max="100" min="0" >
	<div id="valormargensupgen" style="width:auto; display:inline;">0px</div>
<hr>
<label>Margen superior BoxCentral</label>
<input type="range" min="0" max="10" value="1" step="1" onChange="margensuperior(this.value,'box','valorboxsupgen')">
<div id="valorboxsupgen" style="width:auto; display:inline;">1%</div>
<hr>
<label>Margen inferior BoxCentral</label>
<input type="range" min="0" max="10" value="1" step="1" onChange="margeninferior(this.value,'box','valorboxinfgen')">
<div id="valorboxinfgen" style="width:auto; display:inline;">1%</div>
<hr>
<button  onClick="Galeria('general','grillageneral')" style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:100;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Elegir Fondo</button>

<div id="grillageneral" style="overflow:auto; height:255px; border:1px solid #000;"></div>
</fieldset>
