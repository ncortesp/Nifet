function cambiaTemplate(value)
{
	var destino = document.getElementById("cambio");

	switch(value){
		case '1':
			document.getElementById("bandera_arriba").value='1';

			destino.innerHTML = "";
			desocultar('desocultar');
			var general = document.createElement("div");
	general.setAttribute("id","general");
	general.style.width="100%";
	general.style.minHeight="100%";
	general.style.backgroundColor="transparent";
	general.style.margin="0px 0px 0px 0px";
	general.style.position="static";
	general.style.overflow="hidden";

	destino.appendChild(general);
	var wrapper =document.createElement('div');
	wrapper.setAttribute('id','wrapper');
	wrapper.style.backgroundColor="transparent";
	wrapper.style.width="100%";
	wrapper.style.height="100%";
	wrapper.style.cssFloat="none";
	wrapper.style.margin="0 auto";


	general.appendChild(wrapper);

	var header =document.createElement('div');
	header.setAttribute('id','header');
	header.style.width="100%";
	header.style.height="20%";
	header.style.backgroundColor="#999";

	wrapper.appendChild(header);

	var box =document.createElement('div');
	box.setAttribute('id','box');
	box.style.width="100%";
	box.style.minHeight="0%";
	box.style.backgroundColor="transparent";
	box.style.margin="1% 0% 1% 0%";
	box.style.overflow="hidden";

	wrapper.appendChild(box);


	var central =document.createElement('div');
	central.setAttribute('id','central');
	central.style.width="100%";
	central.style.height="200px";
	central.style.backgroundColor="red";
	central.style.margin="0% 0% 1% 0%";
	central.style.cssFloat="left";
	/*img1=document.createElement('img');
	img1.setAttribute('src','1.jpg');
	img1.style.width="10%";
	central.appendChild(img1);*/

	box.appendChild(central);

	var box_left =document.createElement('div');
	box_left.setAttribute('id','box_left');
	box_left.style.width="39%";
	box_left.style.height ="200px";
	box_left.style.backgroundColor="#309";
	box_left.style.margin="0% 1% 0% 0%";
	box_left.style.cssFloat="left";

	/*img2=document.createElement('img');
	img2.setAttribute('src','2.jpg');
	img2.style.width="100%";
	box_left.appendChild(img2);

	img3=document.createElement('img');
	img3.setAttribute('src','3.jpg');
	img3.style.width="100%";
	box_left.appendChild(img3);*/

	box.appendChild(box_left);

	var box_right =document.createElement('div');
	box_right.setAttribute('id','box_right');
	box_right.style.width="60%";
	box_right.style.height="200px";
	box_right.style.backgroundColor="#990";
	box_right.style.margin="0% 0% 0% 0%";
	box_right.style.cssFloat="left";



/*	img3=document.createElement('img');
	img3.setAttribute('src','3.jpg');
	img3.style.width="100%";
	box_right.appendChild(img3);*/

	box.appendChild(box_right);

	var footer =document.createElement('div');
	footer.setAttribute('id','footer');
	footer.style.width="100%";
	footer.style.height="20%";
	footer.style.backgroundColor="#999";
	footer.style.cssFloat="left";
	footer.style.margin="0%";

	wrapper.appendChild(footer);


	for(i=1; i<=4; i++){
			document.getElementById('p'+i).checked = false;
			}
			document.getElementById('p1').checked= true;

		 	break;

		case '2':

		destino.innerHTML = "";
		desocultar('desocultar');
				var general = document.createElement("div");
	general.setAttribute("id","general");
	general.style.width="100%";
	general.style.minHeight="100%";
	general.style.backgroundColor="transparent";
	general.style.margin="0px 0px 0px 0px";
	general.style.position="static";
	general.style.overflow="hidden";
	destino.appendChild(general);

	var wrapper =document.createElement('div');
	wrapper.setAttribute('id','wrapper');
	wrapper.style.backgroundColor="transparent";
	wrapper.style.width="100%";
	wrapper.style.height="100%";
	wrapper.style.cssFloat="none";
	wrapper.style.margin="0 auto";


	general.appendChild(wrapper);

	var header =document.createElement('div');
	header.setAttribute('id','header');
	header.style.width="100%";
	header.style.height="20%";
	header.style.backgroundColor="#999";

	wrapper.appendChild(header);

	var box =document.createElement('div');
	box.setAttribute('id','box');
	box.style.width="100%";
	box.style.minHeight="0%";
	box.style.backgroundColor="transparent";
	box.style.margin="1% 0% 1% 0%";
	box.style.overflow="hidden";
	wrapper.appendChild(box);



	var box_left =document.createElement('div');
	box_left.setAttribute('id','box_left');
	box_left.style.width="39%%";
	box_left.style.height="200px";
	box_left.style.backgroundColor="#309";
	box_left.style.margin="0% 1% 0% 0%";
	box_left.style.cssFloat="left";

	/*img2=document.createElement('img');
	img2.setAttribute('src','2.jpg');
	img2.style.width="100%";
	box_left.appendChild(img2);

	img3=document.createElement('img');
	img3.setAttribute('src','3.jpg');
	img3.style.width="100%";
	box_left.appendChild(img3);*/

	box.appendChild(box_left);

	var box_right =document.createElement('div');
	box_right.setAttribute('id','box_right');
	box_right.style.width="60%";
	box_right.style.height="200px";
	box_right.style.backgroundColor="#990";
	box_right.style.margin="0% 0% 0% 0%";
	box_right.style.cssFloat="left";

/*	img3=document.createElement('img');
	img3.setAttribute('src','3.jpg');
	img3.style.width="100%";
	box_right.appendChild(img3);*/

	box.appendChild(box_right);

	var central =document.createElement('div');
	central.setAttribute('id','central');
	central.style.width="100%";
	central.style.height="200px";
	central.style.backgroundColor="green";
	central.style.margin="1% 0% 0% 0%";
	central.style.cssFloat="left";
	/*img1=document.createElement('img');
	img1.setAttribute('src','1.jpg');
	img1.style.width="10%";
	central.appendChild(img1);*/

	box.appendChild(central);
	var footer =document.createElement('div');
	footer.setAttribute('id','footer');
	footer.style.width="100%";
	footer.style.height="20%";
	footer.style.backgroundColor="#999";
	footer.style.cssFloat="left";

	wrapper.appendChild(footer);

	for(i=1; i<=4; i++){
			document.getElementById('p'+i).checked = false;
			}
			document.getElementById('p2').checked= true;
			document.getElementById('bandera_arriba').value='0';
			break;
	case '3':
		destino.innerHTML = "";
		ocultar('desocultar');
		var general = document.createElement("div");
	general.setAttribute("id","general");
	general.style.width="100%";
	general.style.minHeight="100%";
	general.style.backgroundColor="transparent";
	general.style.margin="0px 0px 0px 0px";
	general.style.position="static";
	general.style.overflow="hidden";

	destino.appendChild(general);
	var wrapper =document.createElement('div');
	wrapper.setAttribute('id','wrapper');
	wrapper.style.backgroundColor="transparent";
	wrapper.style.width="100%";
	wrapper.style.height="100%";
	wrapper.style.cssFloat="none";
	wrapper.style.margin="0 auto";


	general.appendChild(wrapper);

	var header =document.createElement('div');
	header.setAttribute('id','header');
	header.style.width="100%";
	header.style.height="20%";
	header.style.backgroundColor="#999";

	wrapper.appendChild(header);

	var box =document.createElement('div');
	box.setAttribute('id','box');
	box.style.width="100%";
	box.style.minHeight="0%";
	box.style.backgroundColor="transparent";
	box.style.margin="1% 0% 1% 0%";
	box.style.overflow="hidden";

	wrapper.appendChild(box);


	/*var central =document.createElement('div');
	central.setAttribute('id','central');
	central.style.width="100%";
	central.style.height="40px";
	central.style.backgroundColor="red";
	central.style.margin="0% 0% 1% 0%";
	central.style.cssFloat="left";
	img1=document.createElement('img');
	img1.setAttribute('src','1.jpg');
	img1.style.width="10%";
	central.appendChild(img1);

	box.appendChild(central);*/

	var box_left =document.createElement('div');
	box_left.setAttribute('id','box_left');
	box_left.style.width="39%";
	box_left.style.height ="413px";
	box_left.style.backgroundColor="red";
	box_left.style.margin="0% 1% 0% 0%";
	box_left.style.cssFloat="left";

	/*img2=document.createElement('img');
	img2.setAttribute('src','2.jpg');
	img2.style.width="100%";
	box_left.appendChild(img2);

	img3=document.createElement('img');
	img3.setAttribute('src','3.jpg');
	img3.style.width="100%";
	box_left.appendChild(img3);*/

	box.appendChild(box_left);

	var box_right =document.createElement('div');
	box_right.setAttribute('id','box_right');
	box_right.style.width="60%";
	box_right.style.height="413px";
	box_right.style.backgroundColor="green";
	box_right.style.margin="0% 0% 0% 0%";
	box_right.style.cssFloat="left";



/*	img3=document.createElement('img');
	img3.setAttribute('src','3.jpg');
	img3.style.width="100%";
	box_right.appendChild(img3);*/

	box.appendChild(box_right);

	var footer =document.createElement('div');
	footer.setAttribute('id','footer');
	footer.style.width="100%";
	footer.style.height="20%";
	footer.style.backgroundColor="#999";
	footer.style.cssFloat="left";

	wrapper.appendChild(footer);


	for(i=1; i<=4; i++){
			document.getElementById('p'+i).checked = false;
			}
			document.getElementById('p3').checked= true;
			document.getElementById('bandera_arriba').value='0';
		break;
	case '4':
		destino.innerHTML = "";
		ocultar('desocultar');
		var general = document.createElement("div");
	general.setAttribute("id","general");
	general.style.width="100%";
	general.style.minHeight="100%";
	general.style.backgroundColor="transparent";
	general.style.margin="0px 0px 0px 0px";
	general.style.position="static";
	general.style.overflow="hidden";

	destino.appendChild(general);
	var wrapper =document.createElement('div');
	wrapper.setAttribute('id','wrapper');
	wrapper.style.backgroundColor="transparent";
	wrapper.style.width="100%";
	wrapper.style.height="100%";
	wrapper.style.cssFloat="none";
	wrapper.style.margin="0 auto";


	general.appendChild(wrapper);

	var header =document.createElement('div');
	header.setAttribute('id','header');
	header.style.width="100%";
	header.style.height="20%";
	header.style.backgroundColor="#999";

	wrapper.appendChild(header);

	var box =document.createElement('div');
	box.setAttribute('id','box');
	box.style.width="100%";
	box.style.minHeight="0%";
	box.style.backgroundColor="transparent";
	box.style.margin="1% 0% 1% 0%";
	box.style.overflow="hidden";

	wrapper.appendChild(box);


	/*var central =document.createElement('div');
	central.setAttribute('id','central');
	central.style.width="100%";
	central.style.height="40px";
	central.style.backgroundColor="red";
	central.style.margin="0% 0% 1% 0%";
	central.style.cssFloat="left";
	img1=document.createElement('img');
	img1.setAttribute('src','1.jpg');
	img1.style.width="10%";
	central.appendChild(img1);

	box.appendChild(central);*/

	var box_left =document.createElement('div');
	box_left.setAttribute('id','box_left');
	box_left.style.width="60%";
	box_left.style.height ="413px";
	box_left.style.backgroundColor="yellow";
	box_left.style.margin="0% 1% 0% 0%";
	box_left.style.cssFloat="left";

	/*img2=document.createElement('img');
	img2.setAttribute('src','2.jpg');
	img2.style.width="100%";
	box_left.appendChild(img2);

	img3=document.createElement('img');
	img3.setAttribute('src','3.jpg');
	img3.style.width="100%";
	box_left.appendChild(img3);*/

	box.appendChild(box_left);

	var box_right =document.createElement('div');
	box_right.setAttribute('id','box_right');
	box_right.style.width="39%";
	box_right.style.height="413px";
	box_right.style.backgroundColor="green";
	box_right.style.margin="0% 0% 0% 0%";
	box_right.style.cssFloat="left";



/*	img3=document.createElement('img');
	img3.setAttribute('src','3.jpg');
	img3.style.width="100%";
	box_right.appendChild(img3);*/

	box.appendChild(box_right);

	var footer =document.createElement('div');
	footer.setAttribute('id','footer');
	footer.style.width="100%";
	footer.style.height="20%";
	footer.style.backgroundColor="#999";
	footer.style.cssFloat="left";

	wrapper.appendChild(footer);


	for(i=1; i<=4; i++){
			document.getElementById('p'+i).checked = false;
			}
			document.getElementById('p4').checked= true;
			document.getElementById('bandera_arriba').value='0';
		break;
		}
}
