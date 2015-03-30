<?php session_start();?>
<head>
    <!--  Head de index.php el que da problemas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Easy Responsive Tabs to Accordion</title>
    <link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />

    <script src="js/jquery-1.6.3.min.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script src="js/jscolor.js" type="text/javascript"></script>
    <script src="js/funciones_locales.js" type="text/javascript"></script>
    <script src="js/galeria.js" type="text/javascript"></script>
    <script src="../js/plantillas.js" type="text/javascript"></script>
    <!-- alertas-->

<!--<script src='../js/jAlert-v2.js'></script>
<link rel="stylesheet" type="text/css" href="../css/jAlert-v2.css">-->
	<script>
/* $(document).ready(function() {
    $("#cambio").load("pruebalocal.php");
	var refreshId = setInterval(function()
	{
		$("#cambio").load('pruebalocal.php?randval='+Math.random());
	},9000);
});*/

	 function cambiaColor(entrada,salida){
		 color = document.getElementById(entrada).style.backgroundColor; /*en ves de ingresar al value, ingreso al css*/
		 divObj= document.getElementById(salida);
		 divObj.style.backgroundColor = color;

	}


</script>
	<style type="text/css">
        .demo {
            width: 100%;
			height:450px !important;

        }
        .demo h1 {
                margin:33px 0 25px;
            }
        .demo h3 {
                margin: 10px 0;
            }
        pre {
            background: #fff;
        }
        @media only screen and (max-width: 780px) {
        .demo {
float:left;

         }
        .how-use {
                float: left;
                width: 300px;
                display: none;

            }
        }
        #tabInfo {
            display: none;
        }
    .demo1 {            width: 100%;
		height:500px;
}
.demo1 {float:left;
}
/* css titulo proyecto*/

.tituloproyecto{
	font-size:16px;
	font-family:Verdana, Helvetica, Arial, sans-serif;
	width:99%;
	}
.scrollbar::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 1px #000000 ;
	background-color: #F5F5F5 !important;
}
.scrollbar::-webkit-scrollbar
{
	width: 15px;
	background-color: #009fe3 !important;
}
.scrollbar::-webkit-scrollbar-thumb
{
	background-color: #009fe3 !important;
}

    </style>

    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
</head>
<body onLoad="cambiaTemplate('1')">
<div id="menu_edicion" style="margin: 0 auto; background-color:#F0F7F0; float:left; width:50%;">
	<div class="tituloproyecto">
    	<fieldset style="border-color:#c1c1c1;border-style:solid;">
        	<legend>Proyecto Actual</legend>
            <strong><?php echo $_SESSION['proymostrar'];?></strong>
        <a href="link.html" style="float:right;"target="_blank" onClick="abrirVentana(); return false;"><button style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:100;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Subir Fotos</button></a>
        </fieldset><br>
    </div>
    <div class="demo1">
    	<div id="verticalTab">
         	<ul class="resp-tabs-list">
            <li>GENERAL</li>
            <li>CABECERA</li>
            <li>CONTENEDOR IZQUERDO</li>
            <li>CONTENEDOR DERECHO</li>
            <li id="desocultar" style="display:none">CONTENEDOR CENTRAL</li>
            <li>PIE DE PÁGINA </li>
            <li><button style="border:#E83733 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:100;  background-color:#E83733; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Guardar</button></li>
          	</ul>
          		<div class="resp-tabs-container scrollbar">
            <div class="scrollbar">

			   <?php include("contenedores/general.php");
			    ?>
            </div>

            <div class="scrollbar">
              <?php include("contenedores/header.php"); ?>
            </div>

            <div class="scrollbar">
              <?php include("contenedores/contenedorizq.php");?>
            </div>

            <div class="scrollbar">
              <?php include("contenedores/contenedorder.php");?>
            </div>

          	<div class="scrollbar">
              <?php include("contenedores/contenedorcentral.php");?>
            </div>

            <div class="scrollbar">
              <?php include("contenedores/footer.php");?>
            </div>
             <div class="scrollbar">
              <?php include("guardar.php");?>
            </div>

          </div>
        </div>
      </div>
      </div>
      <!--fin menu_edicion-->
      	<div id="vista_previa" class="scrollbar" style="margin: 0 auto; float:left; width:49%; height:580px;overflow-y:scroll;  ">
			<div id="cambio" style="overflow-x:hidden; overflow-y:hidden;"></div>
            </div>
	<!--din vista_previa-->

</body>
