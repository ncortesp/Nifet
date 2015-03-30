<fieldset>
<legend><strong>Contenedor Derecho</strong></legend>
<label>Elegir Color</label>
<input id="cbox_right"name="cbox_right" class="color" onchange="cambiaColor('cbox_right','box_right');" size="4"/>
<hr>

<label>Sombra</label>
<input id="checksomder" type="checkbox" onClick="sombra('box_right','checksomder','colsombd');" >

<div id="colsombd" style="display:none"><label>Color Sombra</label><input class="color" id="colsombrabd" name="colsombrabd" onChange="cambiaSombra('box_right','colsombrabd');" size="4"></div>
<hr>
<label>Borde</label>
<select name="bordes" onChange="borde(value,'box_right');">
	<option value="1" selected>Ninguno</option>
	<option value="2">Solid</option>
    <option value="3">Dashed</option>
</select>
<hr>
	<label>Color Borde</label>
	<input class="color" id="colborbd" name="colborbd" onChange="cambiaBorde('box_right','colborbd');" size="4">
    <hr>
    <label>Ancho Borde</label>
        <input type="range" id="borderangobd" onChange="cambiaAncho2(this.value,'box_right','valoranchoborcd');" min="3" max="7" step="1" value="1">
    <div id="valoranchoborcd" style="width:auto; display:inline;">1px</div>
    <hr>
    <label>Redondear Borde</label>
<input type="range" max="50" value="0" step="5" onChange="borderedondo(this.value,'box_right','valorborderedcd')">
<div id="valorborderedcd" style="width:auto; display:inline;">0px</div>
<hr>
    <button onClick="Galeria('box_right','grillader')" style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:auto;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Elegir Fondo</button>

	<div id="grillader" style="overflow:auto; height:255px; border:1px solid #000;"></div>
</fieldset>
