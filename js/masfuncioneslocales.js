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
function cambiaTemplate(value)
{
	var box_left_ancho = document.getElementById('box_left').style.width;
	var box_right_ancho = document.getElementById('box_right').style.width;
	var box_right_alto = document.getElementById('box_right').style.height;
	var box_left_alto = document.getElementById('box_left').style.height;
	var box_central_ancho = document.getElementById('central').style.width;
	var box_central_alto = document.getElementById('central').style.height;
	var box_central_color = document.getElementById('central').style.backgroundColor;
	var box_central_float = document.getElementById('central').style.cssFloat;

    switch(value)
    {
        case '1':
			box_left_ancho = "30%";
			box_right_ancho = "69%";
			box_central_ancho = "";
			box_central_alto = "";
			box_central_color = "";
			box_left_alto = "100%";
			box_right_alto = "100%";
			ocultar('desocultar');
			for(i=1; i<=6; i++){
			document.getElementById('p'+i).checked = false;
			}
			document.getElementById('p1').checked= true;
			document.getElementById('bandera_arriba').value='0';
        break;
        case '2':
			ocultar('desocultar');
            box_left_ancho = "69%";
			box_right_ancho = "30%";
			box_central_ancho = "";
			box_central_alto = "";
			box_central_color = "";
			box_left_alto = "100%";
			box_right_alto = "100%";
			for(i=1; i<=6; i++){
			document.getElementById('p'+i).checked = false;
			}
			document.getElementById('p2').checked= true;
			document.getElementById('bandera_arriba').value='0';
        break;
        case '3':
		    box_left_ancho = "69%";
			box_left_alto = "49%";
			box_right_ancho = "30%";
			box_right_alto = "49%";
			box_central_ancho = "100%";
			box_central_alto = "50%";
			box_central_color = "#333";
			box_central_float = "left";
			desocultar('desocultar');
			for(i=1; i<=6; i++){
			document.getElementById('p'+i).checked = false;
			}
			document.getElementById('p3').checked= true;
			document.getElementById('bandera_arriba').value='0';
        break;

		case '4':
		    box_left_ancho = "69%";
			box_left_alto = "49%";
			box_right_ancho = "30%";
			box_right_alto = "49%";
			box_central_ancho = "100%";
			box_central_alto = "50%";
			box_central_color = "#333";
			box_central_float = "left";
			desocultar('desocultar');
			for(i=1; i<=6; i++){
			document.getElementById('p'+i).checked = false;
			}
			document.getElementById('p4').checked= true;
			document.getElementById('bandera_arriba').value='1';

        break;



    }
	document.getElementById('box_left').style.width = box_left_ancho;
	document.getElementById('box_right').style.width = box_right_ancho;
	document.getElementById('central').style.width = box_central_ancho;
	document.getElementById('central').style.height = box_central_alto;
	document.getElementById('central').style.backgroundColor = box_central_color;
	document.getElementById('box_left').style.height = box_left_alto;
	document.getElementById('box_right').style.height = box_right_alto;
	document.getElementById('central').style.cssFloat= box_central_float;
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

function moverMargensup(event,id_rango,id_div_destino){
	var inputrango = document.getElementById(id_rango).value;
	var mar = document.getElementById(id_div_destino).style.paddingTop;

	document.getElementById(id_div_destino).style.paddingTop = inputrango ;
	}
	<!-- abrir pop up --!
function abrirVentana() {
window.open("popupimg/galeria.php","","width=550,height=480,menubar=yes,scrollbars=yes")
}
<!-- fin pop up --!

function borderedondo(valorrango,id_destino,imprimirvalor){
var bor = document.getElementById(id_destino);

bor.style.borderRadius=valorrango+"px" ;
document.getElementById(imprimirvalor).innerHTML = valorrango + "px";
	}
function margensuperior(valorrango,id_destino){
	var marsup = document.getElementById(id_destino);

	marsup.style.marginTop=valorrango+"%";
	}
function margeninferior(valorrango,id_destino){
	var marsup = document.getElementById(id_destino);

	marsup.style.marginBottom=valorrango+"%";
	}
