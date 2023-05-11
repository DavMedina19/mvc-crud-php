<?php
session_start();
include_once '../../../7502010044_hector_medina_actividad1/co.edu.udec.act1.hectormedina.modelo/co.edu.udec.act1.hectormedina.modelo.entidades/Usuario.php';
$usuario = $_SESSION("usuario");
$usuario = unserialize($usuario);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MASCOTAS MVC</title>
    </head>
    <body>
    <center>
        <h2>FORMULARIO PARA BUSCAR USUARIOS</h2>
        <hr/>
        <form action="../../co.edu.udec.act1.hectormedina.controladores/UsuarioControlador.php" method="POST">
            <table border="0">
                <tr>
                    <th>CC:</th>
                    <td><input type="number" name="CC" id="CC" value="<?= $usuario->CC ?>"  required /></td>
                </tr>

                <tr>
                    <th>PASSWORD:</th>
                    <td><input type="password" name="clave" id="clave" value="<?= $usuario->password ?>" readonly/></td>
                </tr>

                <tr>
                    <th>NOMBRE:</th>
                    <td><input type="text" name="nombre" id="nombre" value="<?= $usuario->nombre ?>" readonly/></td>
                </tr>

                <tr>
                    <th>APELLIDO:</th>
                    <td><input type="text" name="apellido" id="apellido" value="<?= $usuario->apellido ?>" readonly/></td>
                </tr>

                <tr>
                    <th>GENERO:</th>
                    <td><input type="text" name="genero" id="genero" value="<?= $usuario->genero ?>" readonly/></td>
                </tr>

                <tr>
                    <th>EMAIL:</th>
                    <td><input type="email" name="correo" id="correo" value="<?= $usuario->email ?>" readonly/></td>
                </tr>

                <td colspan="2" style="text-align: center">
                    <input type="submit" name="pagina" value="buscar"/>
                    <input type="submit" name="accion" value="Buscar" id="accion"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" id="limpiar" required  value="limpiar"/>
                </td>

            </table>
    </center>        
</form>
<br/>
<hr/>
<span><?= @$_REQUEST["msg"] ?></span>
</body>
</html>
