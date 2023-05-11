<?php
include_once '..\co.edu.udec.act1.hectormedina.modelo.entidades\Usuario.php';
include_once '../../co.edu.udec.act1.hectormedina.controladores/UsuarioControlador.php';

/* CLASE QUE TIENE LAS OPERACIONES AGREGAR USUARIO, ELIMINAR USUARIO, ETC. */
class Usuariocrud {

    //PROPIEDADES
    public static function agregarUsuario($usuario) {
        try {
            return $usuario->save();     //$mascota->save();
        } catch (Exception $problema) {
            throw new Exception("EL ERROR AL GUARDAR EL USUARIO, ESTE YA DEBE DE EXISTIR");
        }
    }

    public static function buscarUsuario($nombre) {
        try {
            $usuario = Usuario::find(nombre);
            return $usuario;
        } catch (Exception $problema) {
            throw new Exception("EL ERROR AL BUSCAR EL NOMBRE, ESTE YA DEBE DE EXISTIR");
        }
    }

    public static function eliminarUsuario($CC) {
        return Usuariocrud::delete_all(array('conditions' => "CC = $CC"));
    }

    public static function modificarUsuario($usuario) {
        return Usuariocrud::agregarUsuario($usuario);
    }

    public static function listarUsuario() {
        echo "agregar ok<br/>";
    }

    public static function listarUsuarioPorNombre($nombre) {
        return Usuario::find_by_nombre($nombre);
    }

}

// FIN - CLASE 
//LISTAS USUARIO
//try {
//    $usuario = new Usuario();
//    $usuario->cc = 12345;
//    $usuario->nombre = "hector";
//    $usuario->genero = "masculino";
//    $usuario->apellido = "medina";
//    $usuario->email = "hector@gmail.com";
//    $usuario->pass = "55555";

    echo "USUARIO GUARDADO EN LA BASE DE DATOS";
    $usuario = new Usuario();
    $usuario->cc = 1234567;
    $usuario->nombre = "hector";
    $usuario->genero = "masculino";
    $usuario->apellido = "medina";
    $usuario->email = "hectormm@hotmail.com";
    $usuario->pass = "55555";
    Usuariocrud::agregarUsuario($usuario);

////    $estado = Usuariocrud::agregarUsuario($usuario);
//    echo "USUARIO GUARDADO EN LA BASE DE DATOS";
//    $usuario = new Usuario();
//    $usuario->cc = 12345678;
//    $usuario->nombre = "hector";
//    $usuario->genero = "masculino";
//    $usuario->apellido = "medina";
//    $usuario->email = "hector@gmail.com";
//    $usuario->pass = "55555";
//
//    $estado = Usuariocrud::agregarUsuario($usuario);
//    echo "USUARIO GUARDADO EN LA BASE DE DATOS";
//    $Usuario = new Usuario();
//    $usuario->cc = 123456789;
//    $usuario->nombre = "hector";
//    $usuario->genero = "masculino";
//    $usuario->apellido = "medina";
//    $usuario->email = "hector@gmail.com";
//    $usuario->pass = "55555";
//} catch (Exception $problema) {
//    echo $problema->getMessage();
//    exit();
//}
//
//$listado = Usuariocrud::listarUsuario();
//if (count(listado) == 0) {
//    echo 'NO EXISTEN USUARIOS PARA MOSTRAR';
//    exit;
//}
//
//foreach ($listado as $indice => $usuario) {
//    echo "<b>cc:</b> $usuario->cc<br/>";
//    echo "<b>nombre:</b> $usuario->nombre<br/>";
//    echo "<b>genero:</b> $usuario->genero<br/>";
//    echo "<b>apellido:</b> $usuario->apellido<br/>";
//    echo "<b>email:</b> $usuario->email<br/>";
//    echo "<b>pass:</b> $usuario->pass<br/>";
//    echo '<hr/>';
//}
//
////ELIMINADO
//$resultado = Usuariocrud::eliminarUsuario(121212);
//echo '---DESPUES DE ELIMINAR---';
//$listado = Usuariocrud::listarUsuario();
//foreach ($listado as $indice => $usuario) {
//    echo "<b>cc:</b> $usuario->cc<br/>";
//    echo "<b>nombre:</b> $usuario->nombre<br/>";
//    echo "<b>genero:</b> $usuario->genero<br/>";
//    echo "<b>apellido:</b> $usuario->apellido<br/>";
//    echo "<b>email:</b> $usuario->email<br/>";
//    echo "<b>pass:</b> $usuario->pass<br/>";
//    echo '<hr/>';
//}
//
//
////ELIMINAR USUARIO
//try {
//    echo "BUSCANDO EL USUARIO <br/>";
//    $usuario = Usuariocrud::buscarUsuario(12345);
//    echo "cc: $usuario->cc<br/>";
//    echo "nombre: $usuario->nombre<br/>";
//    echo "genero: $usuario->genero<br/>";
//    echo "apellido: $usuario->apellido<br/>";
//    echo "email: $usuario->email<br/>";
//    echo "pass: $usuario->pass<br/>";
//    echo 'ELIMINANDO EL USUARIO'; //ELIMINANDO LOS DATOS
//    $estado = $usuario->delete();
//    if ($estado == true) {
//        echo "ELIMINADO<br/>";
//    } else {
//        echo "NO EXISTE<br/>";
//    }
//    echo "BUSCANDO EL USUARIO <br/>";
//    $usuario = Usuariocrud::buscarUsuario(12345);
//    echo "cc: $usuario->cc<br/>";
//    echo "nombre: $usuario->nombre<br/>";
//    echo "genero: $usuario->genero<br/>";
//    echo "apellido: $usuario->apellido<br/>";
//    echo "email: $usuario->email<br/>";
//    echo "pass: $usuario->pass<br/>";
//} catch (Exception $problema) {
//    echo $problema->getMessage();
//}
//
//
////AGREGAR USUARIO
////$dao = new Usuariocrud();
//$suario = new Usuario();
//$usuario->cc = 12345;
//$usuario->nombre = "hector";
//$usuario->genero = "masculino";
//$usuario->apellido = "medina";
//$usuario->email = "hector@gmail.com";
//$usuario->pass = "55555";
//
//try {
//    $usuario = Usuariocrud::agregarUsuario($usuario); //AGREGAR UNA MASCOTA
//    echo "USUARIO GUARDADO EN LA BASE DE DATOS";
//} catch (Exception $problema) {
//    echo $problema->getMessage();
//}//CON ESTE METODO LOGRARA IDENTIFICAR CUANDO ALGUN DATO 
////QUE SE VAYA A INGRESAR A LA BASE DE DATOS ESTE REPETIDO, ESTE LO NOTIFICARA.
//
//try {
//    $estado = Usuariocrud::buscarUsuario(123456); //BUSCAR MASCOTA
//    echo "cc: $usuario->cc<br/>";
//    echo "nombre: $usuario->nombre<br/>";
//    echo "genero: $usuario->genero<br/>";
//    echo "apellido: $usuario->apellido<br/>";
//    echo "email: $usuario->email<br/>";
//    echo "pass: $usuario->pass<br/>";
//    echo 'MODIFICANDO EL EMAIL'; //MODIFICANDO LOS DATOS
//    $usuario->email = "hectormedina@gmail.com";
//    $usuario->pass = "cualquier cosa";
//    $usuario->cc = 12345;
//    $usuario = Usuariocrud::modificarUsuario($usuario);
//    echo "CONSULTANDO EL USUARIO MODIFICADO"; //BUSCANDO LOS NUEVOS DATOS
//    $usuario = Usuariocrud::buscarUsuario(12345);
//    echo "cc: $usuario->cc<br/>";
//    echo "nombre: $usuario->nombre<br/>";
//    echo "genero: $usuario->genero<br/>";
//    echo "apellido: $usuario->apellido<br/>";
//    echo "email: $usuario->email<br/>";
//    echo "pass: $usuario->pass<br/>";
//} catch (Exception $problema) {
//    echo $problema->getMessage();
//}//CON ESTE METODO LOGRARA IDENTIFICAR CUANDO ALGUN DATO 
// //QUE SE VAYA A INGRESAR A LA BASE DE DATOS ESTE REPETIDO, ESTE LO NOTIFICARA.
//
//
////if($estado == true){
////    echo "USUARIO GUARDADO EN LA BASE DE DATOS";
////}
//// else {
////     echo "USUARIO NO GUARDADO EN LA BASE DE DATOS";
////
//
////Usuariocrud::agregarUsuario(1);
////Usuariocrud::buscarUsuario(1);
////Usuariocrud::eliminarUsuario(1);
////Usuariocrud::modificarUsuario(1);
////Usuariocrud::listarUsuario();
