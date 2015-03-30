function sombra(entrada,id_check,id_div){
	var sombra = document.getElementById(entrada).style.boxShadow;
	if(document.getElementById(id_check).checked){
		document.getElementById(id_div).style.display = 'inline';
		sombra = "2px 2px 2px ";

		}
	else{
		document.getElementById(id_div).style.display = 'none';
		sombra = "none";

	}
	document.getElementById(entrada).style.boxShadow = sombra;

	}

 function cambiaSombra(id_sombra,entrada){
		col = document.getElementById(entrada).style.backgroundColor;
		document.getElementById(id_sombra).style.boxShadow = "2px 2px 2px "+col;
	}
/*function borde(entrada,id_check,id_div){
	var borde = document.getElementById(entrada).style.border;
	var borde_ancho = document.getElementById(entrada).style.borderWidth;
	var inputrango = document.getElementById("borderango").value;

	if(document.getElementById(id_check).checked){
		document.getElementById(id_div).style.display = 'inline';
		borde ="dashed";

		}
	else{
		document.getElementById(id_div).style.display = 'none';
		borde = "none";
		border_ancho ="";}

	document.getElementById(entrada).style.border = borde;

	document.getElementById('header').style.borderWidth = inputrango;
}*/
function cambiaBorde(id_borde,destino){
	col = document.getElementById(destino).style.backgroundColor;
	document.getElementById(id_borde).style.borderColor = col;
	}
function borde(value,destino){
	var tipo_borde = document.getElementById(destino).style.border;

	switch(value){
	case '1':
		tipo_borde = "";
		break;
	case '2':
		tipo_borde = "solid";

		break;
	case '3':
		tipo_borde = "dashed";
		break;
	}
	document.getElementById(destino).style.border = tipo_borde;
	}

function cambiaAncho(event,id_rango,id_div_destino,imprimirvalor){
	var ancho = document.getElementById(id_div_destino).style.borderWidth;
	var inputrango = document.getElementById(id_rango).value;

	document.getElementById(id_div_destino).style.borderWidth = inputrango;

	document.getElementById(imprimirvalor).innerHTML= inputrango+"px";


}
function cambiaAncho2(valorrango,id_destino,imprimirvalor){
	var ancho = document.getElementById(id_destino);
	ancho.style.borderWidth=valorrango+"px";
	document.getElementById(imprimirvalor).innerHTML = valorrango + "px";
	}
