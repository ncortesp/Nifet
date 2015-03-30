
<script>



function  general(){
		// bandera
		var bandera = document.getElementById('desocultar').style.display;


		if (bandera == 'none') {
			  document.getElementById('bandera').value = '0';

		}
		if(bandera == 'list-item'){
			document.getElementById('bandera').value = '1';
			//alert(bandera);

		}


		// atributos de contenedor  general

		var ancho  = document.getElementById('general').style.width;
		var alto   = document.getElementById('general').style.height;
		var fondo  = document.getElementById('general').style.backgroundColor;
		var margen = document.getElementById('general').style.margin;
		var posicion=document.getElementById('general').style.position;
		var overflow=document.getElementById('general').style.overflow;


   	    document.getElementById('general_ancho').value = ancho;
		document.getElementById('general_alto').value = alto;
		document.getElementById('general_fondo').value = fondo;
		document.getElementById('general_margen').value = margen;
		document.getElementById('general_overflow').value= overflow;


		document.getElementById('general_posicion').value=posicion;


		// atributos  wrapper
		var wrapper_ancho  = document.getElementById('wrapper').style.width;
		var wrapper_alto   = document.getElementById('wrapper').style.height;
		var wrapper_fondo  = document.getElementById('wrapper').style.backgroundColor;
		var wrapper_margen_top = document.getElementById('wrapper').style.margin;
		var wrapper_posicion=document.getElementById('wrapper').style.position;
	    var wrapper_float=document.getElementById('wrapper').style.cssFloat;
		var wrapper_img=document.getElementById('general').style.backgroundImage;

   	    document.getElementById('wrapper_ancho').value = wrapper_ancho;
		document.getElementById('wrapper_alto').value = wrapper_alto;
		document.getElementById('wrapper_fondo').value = wrapper_fondo;
		document.getElementById('wrapper_margen_top').value = wrapper_margen_top;
		document.getElementById('wrapper_float').value = wrapper_float;
		document.getElementById('wrapper_posicion').value= wrapper_posicion;
		document.getElementById('wrapper_img').value= wrapper_img;

		// atributos  header m mmmm
	    var header_ancho  = document.getElementById('header').style.width;
		var header_alto   = document.getElementById('header').style.height;
		var header_fondo  = document.getElementById('header').style.backgroundColor;
		var header_border = document.getElementById('header').style.border;
		var header_boxShadow=document.getElementById('header').style.boxShadow;
		var header_img=document.getElementById('header').style.backgroundImage;
		var header_borde_radio=document.getElementById('header').style.borderRadius;





   	  document.getElementById('header_ancho').value = header_ancho;
	  document.getElementById('header_alto').value = header_alto;
	  document.getElementById('header_fondo').value = header_fondo;
	  document.getElementById('header_border').value = header_border;
	  document.getElementById('header_boxShadow').value= header_boxShadow;
	  document.getElementById('header_boxShadow').value= header_boxShadow;
	  document.getElementById('header_img').value= header_img;
	 document.getElementById('header_borde_radio').value= header_borde_radio;


		// atributos  box m mmmm
	    var box_ancho  = document.getElementById('box').style.width;
		var box_alto   = document.getElementById('box').style.height;
		var box_fondo  = document.getElementById('box').style.backgroundColor;
		var box_margen = document.getElementById('box').style.margin;
		var box_overflow = document.getElementById('box').style.overflow;



   	    document.getElementById('box_ancho').value = box_ancho;
		document.getElementById('box_alto').value = box_alto;
		document.getElementById('box_fondo').value = box_fondo;
		document.getElementById('box_margen').value = box_margen;
		document.getElementById('box_overflow').value=box_overflow;


		// atributos box left
		var box_left_ancho  = document.getElementById('box_left').style.width;
		var box_left_alto   = document.getElementById('box_left').style.height;
		var box_left_fondo  = document.getElementById('box_left').style.backgroundColor;
		var box_left_float= document.getElementById('box_left').style.float;
		var box_left_margen= document.getElementById('box_left').style.margin;
		var box_left_borde_radio=document.getElementById('box_left').style.borderRadius;
	    var box_left_border = document.getElementById('box_left').style.border;
		var box_left_boxshadow=document.getElementById('box_left').style.boxShadow;
		var box_left_img=document.getElementById('box_left').style.backgroundImage;



     	document.getElementById('box_left_ancho').value = box_left_ancho ;
		document.getElementById('box_left_alto').value = box_left_alto;
		document.getElementById('box_left_fondo').value = box_left_fondo ;
		document.getElementById('box_left_float').value = box_left_float;
		document.getElementById('box_left_margen').value = box_left_margen;
		document.getElementById('box_left_borde_radio').value= box_left_borde_radio;
	    document.getElementById('box_left_border').value= box_left_border;
	    document.getElementById('box_left_boxshadow').value= box_left_boxshadow;
	    document.getElementById('box_left_img').value= box_left_img;

			// atributos box right
		var box_right_ancho  = document.getElementById('box_right').style.width;
		var box_right_alto   = document.getElementById('box_right').style.height;
		var box_right_fondo  = document.getElementById('box_right').style.backgroundColor;
		var box_right_float= document.getElementById('box_right').style.float;
		var box_right_margen= document.getElementById('box_right').style.margin;
		var box_right_borde_radio=document.getElementById('box_right').style.borderRadius;
		var box_right_border = document.getElementById('box_right').style.border;
		var box_right_boxshadow=document.getElementById('box_right').style.boxShadow;
		var box_right_img=document.getElementById('box_right').style.backgroundImage;




    	document.getElementById('box_right_ancho').value = box_right_ancho ;
		document.getElementById('box_right_alto').value = box_right_alto;
		document.getElementById('box_right_fondo').value = box_right_fondo ;
		document.getElementById('box_right_float').value = box_right_float;
		document.getElementById('box_right_margen').value = box_right_margen;
		document.getElementById('box_right_borde_radio').value = box_right_borde_radio;
	    document.getElementById('box_right_border').value= box_right_border;
	    document.getElementById('box_right_boxshadow').value= box_right_boxshadow;
	    document.getElementById('box_right_img').value= box_right_img;




				// atributos footer
		var footer_ancho  = document.getElementById('footer').style.width;
		var footer_alto   = document.getElementById('footer').style.height;
		var footer_fondo  = document.getElementById('footer').style.backgroundColor;
		var footer_margen= document.getElementById('footer').style.margin;
		var footer_borde_radio=document.getElementById('footer').style.borderRadius;
		var footer_border = document.getElementById('footer').style.border;
		var footer_boxshadow=document.getElementById('footer').style.boxShadow;
		var footer_img=document.getElementById('footer').style.backgroundImage;

        document.getElementById('footer_ancho').value = footer_ancho ;
		document.getElementById('footer_alto').value = footer_alto;
		document.getElementById('footer_fondo').value = footer_fondo ;
		document.getElementById('footer_margen').value = footer_margen;
		document.getElementById('footer_borde_radio').value = footer_borde_radio;
		    document.getElementById('footer_border').value= footer_border;
	    document.getElementById('footer_boxshadow').value= footer_boxshadow;
	    document.getElementById('footer_img').value= footer_img;

		/*  contenedor central*/

		var central_ancho  = document.getElementById('central').style.width;
		var central_alto   = document.getElementById('central').style.height;
		var central_fondo  = document.getElementById('central').style.backgroundColor;
		var central_float= document.getElementById('central').style.float;
		var central_margen= document.getElementById('central').style.margin;
		var central_border = document.getElementById('central').style.border;
		var central_boxshadow=document.getElementById('central').style.boxShadow;
		var central_img=document.getElementById('central').style.backgroundImage;
			var central_borde_radio=document.getElementById('central').style.borderRadius;



     	document.getElementById('central_ancho').value = central_ancho ;
		document.getElementById('central_alto').value = central_alto;
		document.getElementById('central_fondo').value = central_fondo ;
		document.getElementById('central_float').value = central_float;
		document.getElementById('central_margen').value = central_margen;
		document.getElementById('central_border').value= central_border;
	    document.getElementById('central_boxshadow').value= central_boxshadow;
	    document.getElementById('central_img').value= central_img;
	document.getElementById('central_borde_radio').value = central_borde_radio;



}
function funcionar(){

	}

</script>




<form action="verestilo.php" method="post"  >

	<input id ="general_ancho" name="general_ancho" type="hidden" value="" />
	<input id ="general_alto" name="general_alto" type="hidden" value="" />
	<input id ="general_fondo" name="general_fondo" type="hidden" value="" />
	<input id ="general_margen" name="general_margen" type="hidden" value="" />
    <input id ="general_posicion" name="general_posicion" type="hidden" value="" />
    <input id ="general_overflow" name="general_overflow" type="hidden" value="" />


   	<input id ="wrapper_ancho" name="wrapper_ancho" type="hidden" value="" />
	<input id ="wrapper_alto" name="wrapper_alto" type="hidden" value="" />
	<input id ="wrapper_fondo" name="wrapper_fondo" type="hidden" value="" />
	<input id ="wrapper_margen_top" name="wrapper_margen_top" type="hidden" value="" />
    <input id ="wrapper_float" name="wrapper_float" type="hidden" value="" />
    <input id ="wrapper_posicion" name="wrapper_posicion" type="hidden" value="" />
    <input id ="wrapper_img" name="wrapper_img" type="hidden" value="" />


    <input id ="header_ancho" name="header_ancho" type="hidden" value="" />
	<input id ="header_alto" name="header_alto" type="hidden" value="" />
	<input id ="header_fondo" name="header_fondo" type="hidden" value="" />
	<input id ="header_border" name="header_border" type="hidden" value="" />
    <input id ="header_boxShadow" name="header_boxShadow" type="hidden" value="" />
    <input id ="header_img" name="header_img" type="hidden" value="" />
    <input id ="header_borde_radio" name="header_borde_radio" type="hidden" value="" />

    <input id ="box_ancho" name="box_ancho" type="hidden" value="" />
	<input id ="box_alto" name="box_alto" type="hidden" value="" />
	<input id ="box_fondo" name="box_fondo" type="hidden" value="" />
	<input id ="box_margen" name="box_margen" type="hidden" value="" />
    <input id ="box_overflow" name="box_overflow" type="hidden" value="" />


	  <input id ="box_left_ancho" name="box_left_ancho" type="hidden" value="" />
        <input id ="box_left_alto" name="box_left_alto" type="hidden" value="" />
          <input id ="box_left_fondo" name="box_left_fondo" type="hidden" value="" />
            <input id ="box_left_float" name="box_left_float" type="hidden" value="" />
          <input id ="box_left_margen" name="box_left_margen" type="hidden" value="" />
        <input id ="box_left_borde_radio" name="box_left_borde_radio" type="hidden" value="" />
        <input id ="box_left_border" name="box_left_border" type="hidden" value="" />
       <input id ="box_left_boxshadow" name="box_left_boxshadow" type="hidden" value="" />
       <input id ="box_left_img" name="box_left_img" type="hidden" value="" />


          <input id ="box_right_ancho" name="box_right_ancho" type="hidden" value="" />
          <input id ="box_right_alto" name="box_right_alto" type="hidden" value="" />
          <input id ="box_right_fondo" name="box_right_fondo" type="hidden" value="" />
           <input id ="box_right_float" name="box_right_float" type="hidden" value="" />
        <input id ="box_right_margen" name="box_right_margen" type="hidden" value="" />
                 <input id ="box_right_borde_radio" name="box_right_borde_radio" type="hidden" value="" />
               <input id ="box_right_border" name="box_right_border" type="hidden" value="" />
    <input id ="box_right_boxshadow" name="box_right_boxshadow" type="hidden" value="" />
    <input id ="box_right_img" name="box_right_img" type="hidden" value="" />



           <input id ="footer_ancho" name="footer_ancho" type="hidden" value="" />
           <input id ="footer_alto" name="footer_alto" type="hidden" value="" />
          <input id ="footer_fondo" name="footer_fondo" type="hidden" value="" />
          <input id ="footer_margen" name="footer_margen" type="hidden" value="" />
          <input id ="footer_borde_radio" name="footer_borde_radio" type="hidden" value="" />
                    <input id ="footer_border" name="footer_border" type="hidden" value="" />
    <input id ="footer_boxshadow" name="footer_boxshadow" type="hidden" value="" />
    <input id ="footer_img" name="footer_img" type="hidden" value="" />


          <input id ="central_ancho" name="central_ancho" type="hidden" value=""/>
          <input id ='central_alto' name='central_alto' type='hidden' value='' />
          <input id ='central_fondo' name='central_fondo' type='hidden' value='' />
          <input id ='central_float' name='central_float' type='hidden' value='' />
          <input id ='central_margen' name='central_margen' type='hidden' value='' />
         <input id ="central_border" name="central_border" type="hidden" value="" />
         <input id ="central_boxshadow" name="central_boxshadow" type="hidden" value="" />
         <input id ="central_img" name="central_img" type="hidden" value="" />
          <input id ="central_borde_radio" name="central_borde_radio" type="hidden" value="" />


          <input id="bandera" name="bandera" type="hidden" value="" />




          <input id="bandera_arriba" name="bandera_arriba" type="hidden" value="" />






<button onclick="general()"  style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:auto;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Guardar Estilos</button>

</form>



