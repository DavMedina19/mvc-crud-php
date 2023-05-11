<?php
session_start();
include_once '../../../7502010044_hector_medina_actividad1/co.edu.udec.act1.hectormedina.modelo/co.edu.udec.act1.hectormedina.modelo.entidades/Usuario.php';
$usuario = $_SESSION["usuario"];
$usuario = unserialize($usuario);
if ($_SESSION["usuario"] == null) {
    $usuario = null;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MASCOTAS MVC</title>
    </head>
    <body>
    <center>
        <h2>FORMULARIO PARA BUSCAR Y EDITAR USUARIOS</h2>
        <hr/>
        <form action="../../co.edu.udec.act1.hectormedina.controladores/UsuarioControlador.php" method="POST">

            <tr>
                <th>CC:</th>
                <td><input type="number" name="CC" id="CC" value="<?= @$usuario->CC ?>" id="CC" <?= ($usuario != null) ? "readonly" : "required" ?>/></td>
            </tr>

            <tr>
                <th>PASSWORD:</th>
                <td><input type="password" name="clave" id="clave" value="<?= $usuario->password ?>" <?= ($usuario != null) ? "" : "readonly" ?>  /></td>
            </tr>

            <tr>
                <th>NOMBRE:</th>
                <td><input type="text" name="nombre" id="nombre" value="<?= $usuario->nombre ?>" <?= ($usuario != null) ? "" : "readonly" ?>/></td>
            </tr>

            <tr>
                <th>APELLIDO:</th>
                <td><input type="text" name="apellido" id="apellido" value="<?= $usuario->apellido ?>" <?= ($usuario != null) ? "" : "readonly" ?>/></td>
            </tr>


            <th>GENERO:</th>
            <td><input type="text" name="genero" id="genero" value="<?= $usuario->genero ?>" <?= ($usuario != null) ? "" : "readonly" ?>/></td>


            <tr>
                <th>EMAIL:</th>
                <td><input type="email" name="correo" id="correo" value="<?= $usuario->email ?>" <?= ($usuario != null) ? "" : "readonly" ?>/></td>
            </tr>

            <td colspan="2" style="text-align: center">
                <input type="hidden" name="pagina" value="editar"/>
                <input type="submit" name="accion" value="Buscar" id="accion"/>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="accion" value="Editar" id="accion"/>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" id="limpiar" required  value="limpiar"/>
            </td>


    </center>        
</form>
<br/>
<hr/>
<span><?= @$_REQUEST["msg"] ?></span>
</body>
</html>
