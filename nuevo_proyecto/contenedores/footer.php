<fieldset>
<legend><strong>Pie de Página</strong></legend>
<label>Elegir Color</label>
<input id="cfooter"name="cfooter" class="color" onchange="cambiaColor('cfooter','footer');" size="4" />
<hr>

<label>Sombra</label>
<input id="checksomf" type="checkbox" onClick="sombra('footer','checksomf','colsombf');" >

<div id="colsombf" style="display:none"><label>Color Sombra</label><input size="4" class="color" id="colsombraf" name="colsombraf" onChange="cambiaSombra('footer','colsombraf');"></div>
<hr>

<label>Borde</label>
<select name="bordes" onChange="borde(value,'footer');">
	<option value="1" selected>Ninguno</option>
	<option value="2">Solid</option>
    <option value="3">Dashed</option>
</select>
<hr>
	<label>Color Borde</label>
	<input class="color" id="colborf" name="colborf" onChange="cambiaBorde('footer','colborf');" size="4">
<hr>
    <label>Ancho Borde</label>
    <input type="range" id="borderangof" onChange="cambiaAncho2(this.value,'footer','valoranchoborf');" min="3" max="7" step="1" value="1">
    <div id="valoranchoborf" style="width:auto; display:inline;">1px</div>
<hr>
    <label>Redondear Borde</label>
<input type="range" max="50" value="0" step="5" onChange="borderedondo(this.value,'footer','valorborderedf')">
<div id="valorborderedf" style="width:auto; display:inline;">0px</div>
<hr>
    <button onClick="Galeria('footer','grillafooter')" style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:auto;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Elegir Fondo</button>

	<div id="grillafooter" style="overflow:auto; height:255px; border:1px solid #000;"></div>
</fieldset>
