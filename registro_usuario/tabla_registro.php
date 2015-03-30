<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<?php

$str_nombre         = "";
$str_correo         = "";
$str_username   = "";
$str_password   = "";
$str_password2  = "";
 if ( isset($_POST['str_nombre']))
 $str_nombre         = trim($_POST['str_nombre']);

if( isset($_POST['str_correo']) )
    $str_correo     = trim($_POST['str_correo']);
if( isset($_POST['str_username']) )
    $str_username   = trim($_POST['str_username']);
if( isset($_POST['str_password']) )
    $str_password   = trim($_POST['str_password']);
if( isset($_POST['str_password2']) )
    $str_password2  = trim($_POST['str_password2']);


?>

    <script src="../js/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery.alerts.js"></script>


<link href="../css/responsive.css" rel="stylesheet" type="text/css" />
<style>
  input:required:invalid {
    border: 1px solid red;
  }

  input:required:valid {
    border: 1px solid green;
  }
</style>
</head>

<body>
<br>
<fieldset style="margin:0 auto; width:50%" >
	<legend>Registro de Usuarios</legend>
    <form id="registrar_usuario" name="registrar_usuario"  method="POST" action="guardarRegistro.php">
    <table width="75%" style="margin:0 auto;" >
       <?php
        //Si llega el parametro error y no viene vacio
        if( isset( $_POST['error'] ) && $_POST['error'] != '' ) {
    ?>
        <tr>
            <td colspan="2" >
                <font color="red">
                <ul>
                    <?php
                        echo $_POST['msgs_error'];
                    ?>
                </ul>
                </font>
            </td>
        </tr>
    <?php
        }
    ?>
  <tr>
    <td><label for="tx_nombre">Nombre y Apellido</label></td>
    <td> <input name="tx_nombre" type="text" required class="textbox" id="tx_nombre" placeholder="Ej: Nicol&aacute;s Cort&eacute;s" pattern="^.{3,}$" title="3 carácteres mínimos en este campo" value='<?php echo $str_nombre ?>' size="20"  maxlength="30" /></td>
  </tr>
  <tr>
    <td><label for="tx_correo">Correo electronico</label></td>
    <td> <input name="tx_correo" type="email" required class="textbox" id="tx_correo" placeholder="Ej: correo@nifet.cl"  value='<?php echo $str_correo ?>' size="20"  maxlength="30"  /></td>
  </tr>
  <tr>
    <td><label for="tx_username">Nombre de usuario</label></td>
        <td >
            <input name="tx_username" type="text" required class="textbox" id="tx_username" placeholder="Ej: user" pattern="^.{3,}$"  value='<?php echo $str_username ?>' size="20"  maxlength="25"/>
        </td>
  </tr>
  <tr>
     <td><label for="tx_password">Contrase&ntilde;a</label></td>
        <td >
            <input name="tx_password" type="password" required class="textbox" id="tx_password" placeholder="Contrase&ntilde;a"  value='<?php echo $str_password ?>'  size="20"  maxlength="20" />
        </td>
  </tr>
  <tr>
    <td><label for="tx_password2">Confirme la contrase&ntilde;a</label></td>
        <td class="textbox">
            <input name="tx_password2"type="password" required class="textbox" id="tx_password2" placeholder="Contrase&ntilde;a"  value='<?php echo $str_password2 ?>'  size="20"  maxlength="25" />
        </td>

  </tr>
   <td align="center" colspan="2"><br />

        <button onClick="javascript: location.href='../index.php'" name="cancelar" style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:100;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; " >Cancelar</button>
        &nbsp;&nbsp;&nbsp;&nbsp;

        <button type="submit" name="registrarme"style="border:#009fe3 1px solid; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size:14px;  width:100;  background-color:#009fe3; padding:0.5% 1.5% 0.5% 1.5%; color:#FFF; ">Registrarme</button>
    </td>
</table>
</form>
</fieldset>
<br>
</body>
</html>
