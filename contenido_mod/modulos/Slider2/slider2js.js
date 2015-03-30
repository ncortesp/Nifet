$(window).load(function(){

 $(function() {
  $('#slfile-input').change(function(e) {
      addImage(e);
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;

      if (!file.type.match(imageType))
       return;

      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }

     function fileOnload(e) {
      var result=e.target.result;
      $('#slimgSalida').attr("src",result);
     }
    });
  });
function cargaimagenes(){

$('#slfile-input').change(function(e) {
      addImage(e);

     });


     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;

      if (!file.type.match(imageType))
       return;

      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }

     function fileOnload(e) {
      var result=e.target.result;
      $('#slimgSalida').attr("src",result);

     }

}

function sube(nombre,archivo){
	var parametros = {
                "nombre" : nombre,
				"archivo": archivo
        };
        $.ajax({
                data:  parametros,
                url:   'modulos/Slider2/guardar.php',
                type:  'POST',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
				error: function(xhr, textStatus, errorThrown) {
                    alert('Error: ' + xhr.responseText);
                },
                success:  function (response) {
                        alert(response);

                }
        });
	}

	function lee(){
        $.ajax({
                url:   'modulos/Slider2/leer.php',
                type:  'POST',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
				error: function(xhr, textStatus, errorThrown) {
                    alert('Error: ' + xhr.responseText);
                },
                success:  function (response) {
                        $('#Slider2').html(response);

                }
        });
	}

	function leevp(){
        $.ajax({
                url:   'modulos/Slider2/leervp.php',
                type:  'POST',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
				error: function(xhr, textStatus, errorThrown) {
                    alert('Error: ' + xhr.responseText);
                },
                success:  function (response) {
                        $('#sliderprevio').html(response);

                }
        });
	}

	function autosube(){
		sube(document.getElementById('file-input').value,document.getElementById('imgSalida').src);
	}

    $("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);

// JavaScript Document
