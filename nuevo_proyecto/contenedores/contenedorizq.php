<fieldset>
<legend><strong>Contenedor Izquierdo</strong></legend>
<label>Elegir Color</label>
<input id="cbox_left"name="cbox_left" class="color" onchange="cambiaColor('cbox_left','box_left');" size="4s"/>
<hr>
<label>Sombra</label>
<input id="checksom" type="checkbox" onClick="sombra('box_left','checksom','colsombl');" >

<div id="colsombl" style="display:none"><label>Color Sombra</label><input class="color" id="colsombrabl" name="colsombrabl" onChange="cambiaSombra('box_left','colsombrabl');" size="4"></div>
<hr>

<label>Borde</label>
<select name="bordes" onChange="borde(value,'box_left');">
	<option value="1" selected>Ninguno</option>
	<option value="2">Solid</option>
    <option value="3">Dashed</option>
</select>
<hr>
	<label>Color Borde</label>
	<input class="color" id="colborbl" name="colborbl" onChange="cambiaBorde('box_left','colborbl');" size="4">
<hr>
    <label>Ancho Borde</label>

        <input type="range" id="borderangobl" onChange="cambiaAncho2(this.value,'box_left','valoranchoborf');" min="3" max="7" step="1" value="1">
    <div id="valoranchoborf" style="width:auto; display:inline;">1px</div>

<hr>
    <label>Redondear Borde</label>
<input type="range" max="50" value="0" step="5" onChange="borderedondo(this.value,'box_left','valorborderedci')">
<div id="valorborderedci" style="width:auto; display:inline;">0px</div>
<hr>
    <button onClick="Galeria('box_left','grillaizq')" style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:auto;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Elegir Fondo</button>
	<div id="grillaizq" style="overflow:auto; height:255px; border:1px solid #000;"></div>
</fieldset>

