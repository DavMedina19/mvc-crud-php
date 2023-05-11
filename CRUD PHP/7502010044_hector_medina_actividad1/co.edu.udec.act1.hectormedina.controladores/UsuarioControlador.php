<?php
session_start();
include_once '../co.edu.udec.act1.hectormedina.modelo/co.edu.udec.act1.hectormedina.modelo.crud/Usuariocrud.php';
include_once '../co.edu.udec.act1.hectormedina.modelo/co.edu.udec.act1.hectormedina.modelo.entidades/Usuario.php';
include_once '../../libs/configuracionbd.php';

class UsuarioControlador {
    public function recuperar_accion() {
        $accion = $_REQUEST["accion"];
        switch ($accion) {
            case "guardar":
                $this->guardarUsuario();
                break;

            case "buscar":
                $this->buscarUsuario();
                break;

            case "editar":
                $this->editarUsuario();
                break;

            case "eliminar":
                $this->eliminarUsuario();
                break;

            case "listar_todo":
                $this->listar_todo_usuario();
                break;

            default:
                break;
        }
    }

    public function guardarUsuario() {
        $cc = $_REQUEST["CC"];
        $pass = $_REQUEST["clave"];
        $nombre = $_REQUEST["nombre"];
        $apellido = $_REQUEST["apellido"];
        $genero = $_REQUEST["genero"];
        $email = $_REQUEST["correo"];

        //CREAR UNA INSTANCIA DE LA CLASE USUARIO
        $usuario = new Usuario();
        $usuario->cc = $cc;
        $usuario->password = $pass;
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellido;
        $usuario->genero = $genero;
        $usuario->email = $email;
        try {
            $resultado = Usuariocrud::agregarUsuario($usuario);
            header("Location: ../view/usuarios/agregar.php?msg=Usuario Agregado Con Exito!");
            exit;
        } catch (Exception $error) {
            header("Location: ../view/usuarios/agregar.php?msg=" . $error->getMessage());
            exit;
        }
    }

    public function buscarUsuario() {
        $cc = $_REQUEST["CC"];
        $pagina = $_REQUEST[pagina];
        try {
            $usuario = Usuariocrud::buscarUsuario($cc);
            $usuario = serialize($usuario);
            $_SESSION["usuario"] = $usuario;
            header("Location: ../view/usuarios/pagina.php?msg=Usuario encontrado con exito!");
            exit();
        } catch (Exception $error) {
            unset($_SESSION["usuario"]);
            header("Location: ../view/usuarios/pagina.php?msg=" . $error->getMessage());
            exit;
        }
    }

    public function editarUsuario() {
        $cc = $_REQUEST["CC"];
        $password = $_REQUEST["clave"];
        $nombre = $_REQUEST["nombre"];
        $apellido = $_REQUEST["apellido"];
        $genero = $_REQUEST["genero"];
        $email = $_REQUEST["correo"];
        //RECUPERAR USUARIO
        $usuario = $_SESSION("usuario");
        $usuario = unserialize($usuario);
        //DATOS NUEVOS
        $usuario->password = $password;
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellido;
        $usuario->genero = $genero;
        $usuario->email = $email;
        $resultado = Usuariocrud::modificarUsuario($usuario);
        if (resultado != false) {
            unset($_SESSION["usuario"]);
            header("Location: ../view/usuarios/editar.php?msg=Usuario editado con exito!");
            exit();
        } else {
            unset($_SESSION["usuario"]);
            header("Location: ../view/usuarios/editar.php?msg=Usuario editado con exito!");
            exit();
        }
    }

    public function eliminarUsuario() {
        $cc = $_REQUEST["CC"];
        $resultado = Usuariocrud::eliminarUsuario($CC);
        if ($resultado != 0) {
            unset($_SESSION["usuario"]);
            header("Location: ../view/usuarios/eliminar.php?msg=Usuario eliminado con exito!");
            exit();
        } else {
            unset($_SESSION["usuario"]);
            header("Location: ../view/usuarios/eliminar.php?msg=El Usuario no puede ser eliminado!");
            exit();
        }
    }

    public function listar_todo_usuario() {
        $listar_usuarios = Usuariocrud::listarUsuario();
        if ($listar_usuarios == null || count($listar_usuarios) == 0) {
            unset($_SESSION["lista_usuarios"]);
            header("Location: ../view/usuarios/listas.php?msg=El sistema no tiene usuarios registrados!");
            exit();
        } else {
            $listar_usuarios = serialize($listar_usuarios);
            $_SESSION["lista_usuarios"] = $lista_usuarios;
            header("Location: ../view/usuarios/listas.php?msg=Total de usuarios en el sistema" . count($lista_usuarios));
            exit();
        }
    }

}

$controlador = new UsuarioControlador();
$controlador->recuperar_accion();
