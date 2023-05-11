<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>MASCOTAS MVC</title>
    </head>
    <body>
    <center>
        <h2>FORMULARIO PARA AGREGAR USUARIOS</h2>
        <hr/>
        <form action="../../co.edu.udec.act1.hectormedina.controladores/UsuarioControlador.php" method="POST">
            <table border="0">
                <tr>
                    <th>CC:</th>
                    <td><input type="number" name="CC" id="CC" required /></td>
                </tr>

                <tr>
                    <th>PASSWORD:</th>
                    <td><input type="password" name="clave" id="clave" required /></td>
                </tr>

                <tr>
                    <th>NOMBRE:</th>
                    <td><input type="text" name="nombre" id="nombre" required /></td>
                </tr>

                <tr>
                    <th>APELLIDO:</th>
                    <td><input type="text" name="apellido" id="apellido" required /></td>
                </tr>

                <tr>
                    <th>GENERO:</th>
                    <td><input type="text" name="genero" id="genero" /></td>
                </tr>

                <tr>
                    <th>EMAIL:</th>
                    <td><input type="email" name="correo" id="correo" required /></td>
                </tr>

                <td colspan="2" style="text-align: center">
                    <input type="submit" name="accion" value="guardar" id="accion"/>
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
