
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- no cache headers -->
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="Cache-Control" content="no-cache">
<!-- end no cache headers -->
        <title>Galería de Imágenes</title>
        <link rel="stylesheet" href="css/galeria.css">
        	<script src="../js/jquery-1.6.3.min.js"></script>

           <script>


        	function Cargando(){

        $.ajax({

                url:   'php/leerimg.php',
                type:  'post',
                processData : false,
                   contentType : false,
				   beforeSend: function () {
						document.getElementById('grilla').innerHTML = 'Espera, se está cargando las imágenes...';
                },
                   success : function(res){
                       document.getElementById('grilla').innerHTML = res;
                   }
        });
}

	$(document).ready(function() {
		$("[id*=flag]").each(
			function(index, value) {
				$(this).change(Cargando())
			}
		);
	});
        </script>

    </head>
    <body>
        <div class="content">

            <input type="file" id="images" name="images[]" class="custom-file-input"/>
            <button id="btnSubmit">Subir archivo</button>
            <div id="response">

            </div>

        </div>
        <!-- grilla -->

        <fieldset>
        	<legend><strong>Galería</strong>        	</legend>
        	<div id="grilla" class="scrollbarsDemo"style="overflow:auto; height:255px">
        		<input type="hidden" value="0" id="flag" onChange="Cargando();">
        	</div>
		</fieldset>

        <div  style="padding-left:70%"><button style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:100;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit"  onClick="self.close();" onKeyPress="self.close();">Cerrar Ventana</button></div>
        <script src="js/upload.js"></script>
    </body>
</html>
