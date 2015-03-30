	function refreshyt(datos) {
				videokey = datos.split('=');
				videokey = videokey[1];

				var ytframe = $("<iframe>",{
					"id":"ytframe",
					"width":"400",
					"height":"300",
					"src":"//www.youtube.com/embed/"+videokey,
					"frameborder":"0",
					"allowfullscreen":"allowfullscreen"
				});

				 $("#yframe").html(ytframe);

				$("#controlesyt").html("<label>Ingresa el ancho: </label><input onchange='ytancho(this.value)'></input><br>");
				$("#controlesyt").append("<label>Ingresa el alto:  </label><input onchange='ytalto(this.value)'></input><br>");
				$("#controlesyt").append("<label>Ingresa un Titulo: </label><input onchange='yttitulo(this.value)'></input><br>");


	}

	function ytancho(valor) {
		$('#ytframe').css({'width':valor});
	}
		function ytalto(valor) {
		$('#ytframe').css({'height':valor});
	}
	function yttitulo(valor) {
		if(valor != ""){
			$('#ytitulo').html("<p>"+valor+"</p>");
			}
		else{

			eliminaR('youtube','ytitulo');

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

	function ytayuda() {
		alert("ingresa la URL del video que quieras insertar. puedes copiarla de la barra del navagador ej: http://www.youtube.com/watch?v=dQw4w9WgXcQ")
	}
