
<?php

//Inicializar una sesion de PHP
session_start();
 
//Validar que el usuario este logueado y exista un UID
if ( ! (@$_SESSION['autenticado'] == 'SI' && isset($_SESSION['uid'])) )
{
	echo '<script> alert("Zona restringida, por favor, Registrar o Loguear")</script>';
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la 
    //pantalla de login, enviando un codigo de error
?>
        <form name="formulario" method="post" action="../index.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript"> 
            document.formulario.submit();
        </script>
<?php
}
 
    //Conectar BD
    include("../registro_usuario/conectarlogin.php");  
    conectar_bd();
 
    //Sacar datos del usuario que ha iniciado sesion
    $sql = "SELECT  tx_nombre,id
            FROM tbl_users
            
            WHERE id = '".$_SESSION['uid']."'";         
    $result     =mysql_query($sql); 
 
    $nombreUsuario = "";
 
    //Formar el nombre completo del usuario
    if( $fila = mysql_fetch_array($result) )
        $nombreUsuario = $fila['tx_nombre']." ";
     
//Cerrrar conexion a la BD
mysql_close($conexio);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="../img/favicon/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="../img/favicon/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="../img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="../img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="../img/favicon/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-TileImage" content="../img/favicon/mstile-144x144.png">
<!-- fin favicon-->
    <!-- Basic Page Needs
  ================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Nifet - Panel de Control</title>
	
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../css/zerogrid.css">
	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
	<link rel="stylesheet" href="../css/responsiveslides.css" />
    <link href="../css/main.css" rel="stylesheet" type="text/css" />

	
    

	
	<script src="../js/jquery.min.js"></script>
 
	<script src="../js/responsiveslides.js"></script>
   
	<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        //maxwidth: 800,
        namespace: "centered-btns"
      });
    });
  </script>
<!-- script mensaje salir del sistema -->
<script>
function salir(){
		
     var respuesta=confirm("¿Desea realmente SALIR?");
     if(respuesta==true)
         window.location="../registro_usuario/cerrarSesion.php";
    else
         return 0;
		 
}
</script> 
<!-- script ajusto altura iframe -->

<script type='text/javascript'>

    $(function(){

        var iFrames = $('iframe');

        function iResize() {

                for (var i = 0, j = iFrames.length; i < j; i++) {
                  iFrames[i].style.height = iFrames[i].contentWindow.document.body.offsetHeight + 'px';}
            }

                if ($.browser.safari || $.browser.opera) { 

                   iFrames.load(function(){
                       setTimeout(iResize, 0);
               });

                   for (var i = 0, j = iFrames.length; i < j; i++) {
                                var iSource = iFrames[i].src;
                                iFrames[i].src = '';
                                iFrames[i].src = iSource;
               }

                } else {
                   iFrames.load(function() {
                       this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
                   });
                }

        });

</script>
</head>
<body>

<!--------------Header--------------->
<div style="background-color:#242424;width:100%;height:10px;"></div>
<!-- <header class="header_cpanel"> 
	<div class="logo_cpanel"><a href="../index.php"><img  src="../images/nifet.png "/></a></div>
	
   	 <div class="nav2">	
		<ul>
			
		</ul>
       </div>
	</div>
	
</header>-->



<body>

<!--------------Slideshow--------------->

			
<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">
    	<div class="row block01">
        	<div id="main-content">
				<ul id="nav">
                <li class="active"> <a href=""><img  src="../images/icononifettrans.png"/ style="height:30px;"> </li>
                	<!--<li class="active"><a href="../bienvenida.html" target="1">Bienvenida</a></li>-->
                	<li><a href="../nuevo_proyecto/index_nuevo_proyecto.php" target="1">Nuevo Proyecto</a></li>
                    <li><a href="../listado_proyectos/index.php" target="1">Proyectos</a></li>
                	<!--<li><a href="../nuevo_proyecto/indexep.php" target="1">menu trabajo</a></li>
                    <li><a href="../contenido_mod/indexmod.php" target="1">menu contenido</a></li>-->
                    <li style="float:right;font-size: 16px; line-height:14px;color: #009fe3; margin-top:8px !important; width:315px;" >  Bienvenido/a: <strong style="color:#000"><?php echo $nombreUsuario ?></strong> <button style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px; text-align:left; width:100; height:25; background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; margin-top:-5%;" onClick="salir();">Cerrar Sesión</button></li>
                
            	</ul>
            </div>
             <!--   <div class="nav_cerrar" > </div> -->
            
            
        </div>
  
        <div class="row block01" style=" background-color:#F0F7F0">
        	
        
				<iframe src="../bienvenida/index.php" style=" display:block; min-height:600px; overflow:hidden" name="1" class="iframe" scrolling="yes" frameborder="0" width="100%" ></iframe>
                
           
        </div>
	</div>
</section>
<!--------------Footer--------------->
<!--<footer>
	<div class="wrapfooter">
	<p style="text-align:center; font-size:12px">Proyecto de T&iacute;tulo II Nicol&aacute;s Cort&eacute;s - Felipe Santana &copy; Ingenier&iacute;a Inform&aacute;tica 2014</p>
    	
	</div>
</footer>-->

</body></html>
