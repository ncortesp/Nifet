function color(valorvalue,id_destino){
var bor = document.getElementById(id_destino);

bor.style.backgroundColor=valorvalue ;

	}

function colorprimer(valorvalue,id_destino){
var bor = document.getElementById(id_destino);

bor.style.backgroundColor=valorvalue ;

	}

function colortexto(valorvalue,id_destino){

var  selector = document.getElementById('selectormenu').value;

var i;
for (i=1 ;i<=selector;i++){

	var bor = document.getElementById(id_destino+i);
	bor.style.color=valorvalue ;
	}

	}

function margen_sup_menu(valor_rango,destino){
	var mar = document.getElementById(destino);
	mar.style.marginTop=valor_rango+'px';

	}


function margen_inf_menu(valor_rango,destino){
	var mar = document.getElementById(destino);
	mar.style.marginBottom=valor_rango+'px';

	}
function colorborde(valorvalue,id_destino){

	var  selector = document.getElementById('selectormenu').value;

     document.getElementById('nav_ul').style.borderBottomColor=valorvalue;
var i;
for (i=1 ;i<=selector;i++){

	var bor = document.getElementById(id_destino+i);
	bor.style.borderRightColor = valorvalue ;
	}



	}








function mostrarmenu(){
var selectormenu =document.getElementById('selectormenu').value;
var cont;

//limpiar lo que hay en la funcion todos los hijos de los padres para hacrlo denuevo




var form1=document.createElement('form');
	form1.setAttribute('method','get');
document.getElementById('campodetexto').innerHTML='';
document.getElementById('menu_1').innerHTML='';


document.getElementById('campodetexto').appendChild(form1);

 //creamos contenedor principal de menu

	nav_ul();

 //

//   ciclo  que controla   la cantidad  de contenedores de texto que llevara el sistema de menu ;


for ( cont =1 ; cont<=selectormenu;cont++ ){


	var nombrecampo = document.createElement('div');
	form1.appendChild(nombrecampo);
	var texto = document.createTextNode("Nombre menu"+cont);
	nombrecampo.appendChild(texto);

	var input1=ce('input','');
	input1.setAttribute('type','text');
	input1.setAttribute('id','caja'+cont);
	input1.setAttribute("onchange","creartexto('caja"+cont+"','"+cont+"'),mostrar_input2('caja2"+cont+"')");

    nombrecampo.appendChild(input1);


	var nombrecampo2 = document.createElement('div');
	form1.appendChild(nombrecampo2);
	var texto2 = document.createTextNode("Link"+cont);
	nombrecampo.appendChild(texto2);

	var input2=ce('input','');
	input2.setAttribute('type','text');
	input2.setAttribute('id','caja2'+cont);
	input2.setAttribute('disabled','disabled');
	input2.setAttribute("onchange","agregar_link('caja2"+cont+"','"+cont+"');");
    nombrecampo.appendChild(input2);

  nav_li(cont);

  }



}




function mostrar_input2(id_input2){

	document.getElementById(id_input2).disabled=false;


	}


function  nav_ul(){

	var  navprincipal= document.createElement('ul');
	navprincipal.setAttribute('id','nav_ul');
	//atributos contenedor principal nav;
	navprincipal.style.width='100%';
	navprincipal.style.margin='0 0 3em 0';
	navprincipal.style.padding='0';
	navprincipal.style.listStyle='none';
	navprincipal.style.backgroundColor='#aaa';
	navprincipal.style.borderBottom='1px solid ';
	navprincipal.style.bordeeBottoColor= '#ccc';
	document.getElementById('menu_1').appendChild(navprincipal);

	}

function nav_li(cont){
	     var  nav_li= document.createElement('li');
	     nav_li.setAttribute('id','nav_li_'+cont);
         nav_li.style.cssFloat='left';

       	 document.getElementById('nav_ul').appendChild(nav_li);
		 nav_a(cont);
}


function nav_a(cont){
	 var  nav_a= document.createElement('a');
	     nav_a.setAttribute('id','a_'+cont);
		 nav_a.style.display='block';
		 nav_a.style.padding='12px 25px';
		 nav_a.style.textDecoration='none';
		 nav_a.style.fontWeight='bold';
		 nav_a.style.color='#069';
		 nav_a.style.borderRight='1px solid ';
		 nav_a.style.borderRightColor='#ccc';
		 nav_a.setAttribute('href',"#" );
		 		 nav_a.style.backgroundColor='#000080';


         document.getElementById('nav_li_'+cont).appendChild(nav_a);






	}

function creartexto(input_text,cont){

	 var rescatar_texto= document.getElementById(input_text).value;
	 var inserto = document.createTextNode(rescatar_texto);
	     document.getElementById('a_'+cont).appendChild(inserto);


	}

function agregar_link(input_text,cont){

	var cambio_link = document.getElementById(input_text).value;
	document.getElementById('a_'+cont).setAttribute('href',cambio_link);
    alert(cambio_link);

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




