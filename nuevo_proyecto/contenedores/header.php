<fieldset>
<legend><strong>Cabecera</strong></legend>
<label>Elegir Color</label>
<input id="eheader"name="eheader" class="color" onchange="cambiaColor('eheader','header');" size="4" />
<hr>
<label>Sombra</label>
<input id="check1" type="checkbox" onClick="sombra('header','check1','colsom');" >
<div id="colsom" style="display:none"><label>Color Sombra</label><input class="color" id="colsombra" name="colsombra" onChange="cambiaSombra('header','colsombra');" size="4"></div>
<hr>
<label>Borde</label>
<select name="bordes" onChange="borde(value,'header');">
	<option value="1" selected>Ninguno</option>
	<option value="2">Solid</option>
    <option value="3">Dashed</option>
</select>
<hr>
	<label>Color Borde</label>
	<input class="color" id="colbor" name="colbor" onChange="cambiaBorde('header','colbor');" size="4">
    <hr>
    <label>Ancho Borde</label>
    <input type="range" id="borderango" onChange="cambiaAncho2(this.value,'header','valoranchoborh');" min="3" max="7" step="1" value="1"><div id="valoranchoborh" style="width:auto; display:inline;">1px</div>
    <hr>
<label>Redondear Borde</label>
<input type="range" max="50" value="0" step="5" onChange="borderedondo(this.value,'header','valorborderedh')">
<div id="valorborderedh" style="width:auto; display:inline;">0px</div>


<hr>
<button onClick="Galeria('header','grillaheader')" style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:auto;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Elegir Fondo</button>


<div id="grillaheader" style="overflow:auto; height:255px ; border:1px solid #000;"></div>
</fieldset>
