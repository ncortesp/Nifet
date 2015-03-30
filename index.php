<!DOCTYPE html>
<html lang="es" class="no-js">
<html>
<head>
<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="img/favicon/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
<!-- fin favicon-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta charset="utf-8">
<title>Nifet - Inicio</title>

<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<!-- alertas-->
<script src='js/jAlert-v2.js'></script>
<link rel="stylesheet" type="text/css" href="css/jAlert-v2.css">
<!-- cosas para slider-->
<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.cbpFWSlider.min.js"></script>
		<script>
	$( function() {
$( '#cbp-fwslider' ).cbpFWSlider();
$( '#cbp-fwslider' ).cbpFWSlider('interval');
} );


		</script>


<!-- fin cosas para slider-->


<script src="js/js_menu.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body style="margin:0 auto;">
<header style="z-index:1;"><a id="logo" href="">Logo</a>
    <nav id="menu"><a class="nav-mobile" id="nav-mobile" href="#"></a>
        <ul>
        <li><a href="index.php" >Inicio</a></li>
        <li><a href="#" onClick="alert('resualsda');">Sobre NIFET</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a id="login_pop" href="#login">Login</a></li>
        </ul>
    </nav>
</header>
<div class="container">
		  <div id="cbp-fwslider" class="cbp-fwslider">
			  <ul>
					<li><a><img src="img/1.jpg" alt="img01"/ width="100%"></a></li>
					<li><a><img src="img/2.jpg" alt="img02"/ width="100%"></a></li>
					<li><a><img src="img/3.jpg" alt="img03"/ width="100%"></a></li>
					<li><a><img src="img/4.jpg" alt="img04"/ width="100%"></a></li>
					<li><a><img src="img/5.jpg" alt="img05"/ width="100%"></a></li>
				</ul>
			</div>
		</div>
<section id="content" style="text-align:center">
	<br><br>
		<a style="font-size:21px">QUEREMOS FACILITAR<a style="color:#009fe3; font-size:21px"> EL DESARROLLO DE TUS PLANTILLAS WEB</a></a><br><a style="font-size:18px">CONF&Iacute;A EN NOSOTROS :)<BR><br>



</section>
<footer>
	<div class="wrapfooter">
	<p style="text-align:center; font-size:12px">Proyecto de T&iacute;tulo II Nicol&aacute;s Cort&eacute;s - Felipe Santana &copy; Ingenier&iacute;a Inform&aacute;tica 2014</p>

	</div>
</footer>
</body>
</html>
<!-- popup -->
 <a class="overlay" id="login" href=""></a>
<div class="popup">
<form method="post"  action="registro_usuario/validarusuario.php"  onsubmit="return formulario(this)">

            	<label class="username">
                <span>Usuario</span>
                <input id="usuario" name="usuario" value="" type="text"  placeholder="Usuario" required autofocus>
                </label>

                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password" required>
                </label>

                <button id="botonform" type="submit">Ingresar</button>

                <a href="registro_usuario/registro.php"><button id="botonform" type="button">Registrar</button></a>




          </form>

</div>
