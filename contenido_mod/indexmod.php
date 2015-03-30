<?php

session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gadget</title>
<link rel="stylesheet" href="estiloedicion.css" type="text/css">

<script src="../js/jquery-2.1.1.min.js"></script>

<script type="application/javascript">
var rutaContenido =  "<?php echo $_SESSION['ruta_basedato']; ?>";


</script>
</head>

<body>
<div id="bah" style="height:590px; width:99%; float:left;">
	<div class="titulomasherramientas scrollbar">
        <div class="tituloproyecto">
        <fieldset>
            <legend>Proyecto Actual</legend>
            <strong><?php echo $_SESSION['proymostrar'];?></strong>
            <div style="float:right; padding-right:25px;">
            <button class="botoncitorojo" onClick="guardarproyecto()">Guardar Proyecto</button>
            </div>
        </fieldset>
        </div>
        <br>
        <div id="botonesWidget">
            <fieldset>
                <legend>Seleccione Algún Widget</legend>
                	<button class="botoncito" onClick="crearGadget('banner','2')">Agregar Banner</button>
                    <button class="botoncito" onClick="crearGadget('Twitter','1')">Agregar Twitter</button>
                    <button class="botoncito" onClick="crearGadget('mina','1')">Agregar mina rica</button>
                    <button class="botoncito" onClick="crearGadget('menu_1','3')">agregar menu </button>
                    <button class="botoncito" onClick="crearGadget('youtube','1')">Youtube</button>
                    <button class="botoncito" onClick="crearGadget('Slider2','1')">Slider</button>
                    <button class="botoncito" onClick="crearGadget('Redes_sociales','4')">Redes Sociales</button>

            </fieldset>
        </div>

            <div id="herramientas" class="scrollbar">
            </div>
    </div>
   	<div id="visor" ></div>

</div>
</body>

<script src="funciones_edicion.js" type="text/javascript" ></script>
</html>
