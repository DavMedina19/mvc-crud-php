<?php
session_start();
include_once '../../co.edu.udec.act1.hectormedina.modelo/co.edu.udec.act1.hectormedina.modelo.entidades/Usuario.php';
$lista_usuarios = $_SESSION["lista_usuarios"];
$lista_usuarios = unserialize($lista_usuarios);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <h2>REPORTE DE USUARIOS EN EL SISTEMA</h2>
        <hr/>
        <?php
        if ($_SESSION['listar_usuarios'] != null) {
            ?>
            <table border="1">
                <tr>
                    <th>ITEM</th>
                    <th>CEDULA</th>
                    <th>NOMBRE</th>
                </tr>
                <?php
                foreach ($lista_usuarios as $indice => $usuario) {
                    ?>
                    <tr>
                        <td>
                            <?= ($indice + 1) ?>
                        </td>

                        <td>
                            <?= $usuario->CC ?>
                        </td>

                        <td>
                            <?= $usuario->nombre ?>
                        </td>
                    </tr>

                    <?php
                }
                ?>
            </table>
            <?php
        }
        ?>

        <span><?= @$_REQUEST["msg"] ?></span>
    </center>        
</body>
</html>
