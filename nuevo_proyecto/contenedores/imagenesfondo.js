function imgPatron(){
	document.getElementById('obj').innerHTML="";
	img = document.createElement('div');
	img.setAttribute('id','img_patron');
	img.style.width = "400px";
	img.style.height = "280px";
	img.style.border = "solid";

	document.getElementById('obj').appendChild(img);

	for(x=1; x<=6; x++){

	grilla = document.createElement('div');
	grilla.setAttribute('id','grilla_patron');
	grilla.style.width = "130 px";
	grilla.style.height = "130 px";
	grilla.style.margin = "1px";
	grilla.style.cssFloat ="left";
	grilla.style.cursor = "pointer";
	document.getElementById('img_patron').appendChild(grilla);


	pic = document.createElement('img');
	pic.src = '../img_patron/img'+x+'.png';
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
	}// JavaScript Document
