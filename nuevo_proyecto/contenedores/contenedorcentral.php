<fieldset>
<legend><strong>Contenedor Central</strong></legend>
<label>Margen Superior</label>
<input type="range" max="5" value="1" step="1" onChange="margensupcentral(this.value,'central','valorcentral')">
<div id="valorcentral" style="width:auto; display:inline;">1%</div>
<hr>
<label>Elegir Color</label>
<input id="ccentral"name="ccentral" size="4" class="color" onchange="cambiaColor('ccentral','central');" />
<br>
<hr>
<label>Sombra</label>
<input id="checksomcen" type="checkbox" onClick="sombra('central','checksomcen','colsomcen');" size="4" >

<div id="colsomcen" style="display:none"><label>Color Sombra</label><input size="4" class="color" id="colsombracen" name="colsombracen" onChange="cambiaSombra('central','colsombracen');"></div>
<br>
<hr>
<label>Borde</label>
<select name="bordes" onChange="borde(value,'central');">
	<option value="1" selected>Ninguno</option>
	<option value="2">Solid</option>
    <option value="3">Dashed</option>
</select>
<hr>
	<label>Color Borde</label>
	<input class="color" size="4" id="colborcen" name="colborcen" onChange="cambiaBorde('central','colborcen');">
  <hr>
    <label>Ancho Borde</label><input type="range" id="borderangocen" onChange="cambiaAncho2(this.value,'central','valoranchocentral');" min="1" max="5" step="1" value="1"><div id="valoranchocentral" style="width:auto; display:inline;">1px</div>
   <hr>
  <label>Redondear Borde</label>
<input type="range" max="50" value="0" step="5" onChange="borderedondo(this.value,'central','valorredondocentral')">
    <div id="valorredondocentral" style="width:auto; display:inline;">0px</div><br><hr>
    <button onClick="Galeria('central','grillacentral')" style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:auto;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " type="submit">Elegir Fondo</button>
    <div id="grillacentral" style="overflow:auto; height:255px;border:1px solid #000;"></div>

</fieldset>
