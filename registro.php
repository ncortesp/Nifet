<!DOCTYPE html>
<html lang="es" class="no-js">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta charset="utf-8">
<link href='images/nifeticono.png' rel='icon' type='image/x-icon'/>
<title>Nifet - Inicio</title>
<link rel="stylesheet" href="css/estilo.css">

<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

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

<!-- menu -->
<script src="js/js_menu.js" type="text/javascript"></script>
<!-- fin menu -->

</head>
<body style="margin:0 auto;">
<header style="z-index:1;"><a id="logo" href="">Logo</a>
    <nav id="menu"><a class="nav-mobile" id="nav-mobile" href="#"></a>
        <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#">Sobre NIFET</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a id="login_pop" href="#login">Login</a></li>
        </ul>
    </nav>
</header>
<div class="container"></div>
<section id="content" style="text-align:center">
	<form action="#">



  <div>
    <label class="desc" id="title1" for="Field1">Full Name</label>
    <div>
      <input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>

  <div>
    <label class="desc" id="title3" for="Field3">
      Email
    </label>
    <div>
      <input id="Field3" name="Field3" type="email" spellcheck="false" value="" maxlength="255" tabindex="3">
   </div>
  </div>

  <div>
    <label class="desc" id="title4" for="Field4">
      Message
    </label>

    <div>
      <textarea id="Field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
  </div>

  <div>
    <fieldset>

      <legend id="title5" class="desc">
        Select a Choice
      </legend>

      <div>
      	<input id="radioDefault_5" name="Field5" type="hidden" value="">
      	<div>
      		<input id="Field5_0" name="Field5" type="radio" value="First Choice" tabindex="5" checked="checked">
      		<label class="choice" for="Field5_0">First Choice</label>
      	</div>
        <div>
        	<input id="Field5_1" name="Field5" type="radio" value="Second Choice" tabindex="6">
        	<label class="choice" for="Field5_1">Second Choice</label>
        </div>
        <div>
        	<input id="Field5_2" name="Field5" type="radio" value="Third Choice" tabindex="7">
        	<label class="choice" for="Field5_2">Third Choice</label>
        </div>
      </div>
    </fieldset>
  </div>

  <div>
    <fieldset>
      <legend id="title6" class="desc">
        Check All That Apply
      </legend>
      <div>
      <div>
      	<input id="Field6" name="Field6" type="checkbox" value="First Choice" tabindex="8">
      	<label class="choice" for="Field6">First Choice</label>
      </div>
      <div>
      	<input id="Field7" name="Field7" type="checkbox" value="Second Choice" tabindex="9">
      	<label class="choice" for="Field7">Second Choice</label>
      </div>
      <div>
      	<input id="Field8" name="Field8" type="checkbox" value="Third Choice" tabindex="10">
      	<label class="choice" for="Field8">Third Choice</label>
      </span>
      </div>
    </fieldset>
  </div>

  <div>
    <label class="desc" id="title106" for="Field106">
    	Select a Choice
    </label>
    <div>
    <select id="Field106" name="Field106" class="field select medium" tabindex="11">
      <option value="First Choice">First Choice</option>
      <option value="Second Choice">Second Choice</option>
      <option value="Third Choice">Third Choice</option>
    </select>
    </div>
  </div>

  <div>
		<div>
  		<input id="saveForm" name="saveForm" type="submit" value="Submit">
    </div>
	</div>

</form>

</section>
<footer>
	<div class="wrapfooter">
	<p style="text-align:center; font-size:12px">Proyecto de T&iacute;tulo II Nicol&aacute;s Cort&eacute;s - Felipe Santana &copy; Ingenier&iacute;a Inform&aacute;tica 2014</p>

	</div>
</footer>

</body>
</html>
<style>


@media (max-width: 600px) {
  form > div {
    margin: 0 0 15px 0;
  }
  form > div > label,
  legend {
	  width: 100%;
    float: none;
    margin: 0 0 5px 0;
  }
  form > div > div,
  form > div > fieldset > div {
    width: 100%;
    float: none;
  }
  input[type=text],
  input[type=email],
  input[type=url],
  input[type=password],
  textarea,
  select {
    width: 100%;
  }
}
@media (min-width: 1200px) {
  form > div > label,
	legend {
  	text-align: right;
  }
}
</style>
