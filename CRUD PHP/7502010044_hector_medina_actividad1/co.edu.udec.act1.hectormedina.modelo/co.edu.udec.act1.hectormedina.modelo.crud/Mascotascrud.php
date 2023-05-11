<?php
include_once '../co.edu.udec.act1.hectormedina.modelo.entidades/Mascotas.php';

/* CLASE QUE TIENE LAS OPERACIONES AGREGAR MASCOTAS, ELIMINAR MASCOTAS, ETC. */
class Mascotascrud {
    //PROPIEDADES
    public static function agregarMascota($mascota) {
        try {
            $mascota->save();
        } catch (Exception $problema) {
            throw new Exception("EL ERROR AL GUARDAR LA MASCOTA, ESTA YA DEBE DE EXISTIR");
        }
    }

    public static function buscarMascota($nombre) {
        try {
            $mascota = Mascotas::find(nombre);
            return $mascota;
        } catch (Exception $problema) {
            throw new Exception("EL ERROR AL BUSCAR LA MASCOTA, ESTA YA DEBE DE EXISTIR");
        }
    }

    public static function eliminarMascota($id) {
        return Mascotascrud::delete_all(array('conditions' => "id = $id"));
    }

    public static function modificarMascota($mascota) {
        return Mascotascrud::agregarMascota($mascota);
    }

    public static function listarMascota() {
        echo "agregar ok<br/>";
    }

    public static function listarMascotaPorNombre($nombre) {
        return Usuario::find_by_nombre($nombre);
    }

}

// FIN - CLASE
// LISTAR MASCOTA
//try {
//    $usuario = new Usuario();
//    $mascota->id = 121212;
//    $mascota->nombre = "zeus";
//    $mascota->genero = "masculino";
//    $mascota->peso = "30kg";
//    $mascota->tamaño = "30cm";
//    $mascota->color = "cafe";  
//    $mascota->raza = "pitbull";
//    $mascota->especie = "perro";
//    $mascota->fechaNacimiento = "10 de octubre";
//    $mascota->propietario = "hector medina";
//    $mascota->DomesticoOsalvaje = "domestico";
//    $mascota->tienVacunas = "si";
//    $mascota->veterinario = "carlos d.";
//    

echo "MASCOTA GUARDADA EN LA BASE DE DATOS";
$mascota = new Mascotas();
$mascota->id = 12121210;
$mascota->nombre = "jack";
$mascota->genero = "masculino";
$mascota->peso = "20kg";
$mascota->tamano = "20";
$mascota->color = "negro";
$mascota->raza = "bulldog";
$mascota->especie = "perro";
$mascota->fechanacimiento = "10/02/2022";
$mascota->propietario = "vanessa londoño";
$mascota->domesticoosalvaje = "domestico";
$mascota->tienvacunas = "si";
$mascota->veterinario = "carlos d.";
Mascotascrud::agregarMascota($mascota);

//
//    $estado = Mascotascrud::agregarMascota($mascota);
//    echo "MASCOTA GUARDADA EN LA BASE DE DATOS";
//    $usuario = new Usuario();
//    $mascota->id = 12121255;
//    $mascota->nombre = "luna";
//    $mascota->genero = "femenina";
//    $mascota->peso = "10kg";
//    $mascota->tamaño = "15cm";
//    $mascota->color = "blanco";  
//    $mascota->raza = "chihuahua";
//    $mascota->especie = "perro";
//    $mascota->fechaNacimiento = "05 de noviembre";
//    $mascota->propietario = "laura vanessa";
//    $mascota->DomesticoOsalvaje = "domestica";
//    $mascota->tienVacunas = "si";
//    $mascota->veterinario = "carlos d.";
//    
//    $estado = Mascotascrud::agregarMascota($mascota);
//    echo "MASCOTA GUARDADA EN LA BASE DE DATOS";
//    $usuario = new Usuario();
//    $mascota->id = 12121200;
//    $mascota->nombre = "Jean";
//    $mascota->genero = "masculino";
//    $mascota->peso = "50kg";
//    $mascota->tamaño = "40cm";
//    $mascota->color = "negro";  
//    $mascota->raza = "rottwiller";
//    $mascota->especie = "perro";
//    $mascota->fechaNacimiento = "19 de octubre";
//    $mascota->propietario = "brayan jesus";
//    $mascota->DomesticoOsalvaje = "salvaje";
//    $mascota->tienVacunas = "si";
//    $mascota->veterinario = "carlos d.";
//    
//} catch (Exception $problema) {
//    echo $problema->getMessage();
//    exit();
//}
//
//$listado = Mascotascrud::listarMascota();
//if (count(listado) ==0) {
//    echo 'NO EXISTEN MASCOTAS PARA MOSTRAR';
//    exit;
//}
//
//foreach ($listado as $indice => $mascota) {
//    echo "<b>id:</b> $mascota->id<br/>";
//    echo "<b>nombre:</b> $mascota->nombre<br/>";
//    echo "<b>genero:</b> $mascota->genero<br/>";
//    echo "<b>peso:</b> $mascota->peso<br/>";
//    echo "<b>tamaño:</b> $mascota->tamaño<br/>";
//    echo "<b>color:</b> $mascota->color<br/>";
//    echo "<b>raza:</b> $mascota->raza<br/>";
//    echo "<b>especie:</b> $mascota->especie<br/>";
//    echo "<b>fechaNacimiento:</b> $mascota->fechaNacimiento<br/>";
//    echo "<b>tienVacunas:</b> $mascota->tienVacunas<br/>";
//    echo "<b>veterinario:</b> $mascota->veterinario<br/>";
//    echo '<hr/>';
//}
//
////ELIMINADO
//$resultado = Mascotascrud::eliminarMascota(121212);
//echo '---DESPUES DE ELIMINAR---';
//$listado = Mascotascrud::listarMascota();
//foreach ($listado as $indice => $mascota) {
//    echo "<b>id:</b> $mascota->id<br/>";
//    echo "<b>nombre:</b> $mascota->nombre<br/>";
//    echo "<b>genero:</b> $mascota->genero<br/>";
//    echo "<b>peso:</b> $mascota->peso<br/>";
//    echo "<b>tamaño:</b> $mascota->tamaño<br/>";
//    echo "<b>color:</b> $mascota->color<br/>";
//    echo "<b>raza:</b> $mascota->raza<br/>";
//    echo "<b>especie:</b> $mascota->especie<br/>";
//    echo "<b>fechaNacimiento:</b> $mascota->fechaNacimiento<br/>";
//    echo "<b>tienVacunas:</b> $mascota->tienVacunas<br/>";
//    echo "<b>veterinario:</b> $mascota->veterinario<br/>";
//    echo '<hr/>';
//}
//
////ELIMINAR MASCOTA
//try {
//    echo "BUSCANDO LA MASCOTA <br/>";
//    $mascota = Mascotascrud::buscarMascota(zeus);
//    echo "id: $mascota->id<br/>";
//    echo "nombre: $mascota->nombre<br/>";
//    echo "genero: $mascota->genero<br/>";
//    echo "peso: $mascota->peso<br/>";
//    echo "tamaño: $mascota->tamaño<br/>";
//    echo "color: $mascota->color<br/>";  
//    echo "raza: $mascota->raza<br/>";
//    echo "especie: $mascota->especie<br/>";
//    echo "fechaNacimiento: $mascota->fechaNacimiento<br/>";
//    echo "propietario: $mascota->propietario<br/>";
//    echo "DomesticoOsalvaje: $mascota->DomesticoOsalvaje<br/>";
//    echo "tienVacunas: $mascota->tienVacunas<br/>";
//    echo "veterinario: $mascota->veterinario<br/>";
//    echo 'ELIMINANDO LA MASCOTA'; //ELIMINANDO LOS DATOS
//    $mascota = $mascota->delete();
//    if($estado == true){
//        echo "ELIMINADO<br/>";
//    }
//    else {
//        echo "NO EXISTE<br/>";
//    }
//    echo "BUSCANDO LA MASCOTA <br/>";
//    $mascota = Mascotascrud::buscarMascota(zeus);
//    echo "id: $mascota->id<br/>";
//    echo "nombre: $mascota->nombre<br/>";
//    echo "genero: $mascota->genero<br/>";
//    echo "peso: $mascota->peso<br/>";
//    echo "tamaño: $mascota->tamaño<br/>";
//    echo "color: $mascota->color<br/>";  
//    echo "raza: $mascota->raza<br/>";
//    echo "especie: $mascota->especie<br/>";
//    echo "fechaNacimiento: $mascota->fechaNacimiento<br/>";
//    echo "propietario: $mascota->propietario<br/>";
//    echo "DomesticoOsalvaje: $mascota->DomesticoOsalvaje<br/>";
//    echo "tienVacunas: $mascota->tienVacunas<br/>";
//    echo "veterinario: $mascota->veterinario<br/>";
//} catch (Exception $problema){
//    echo $problema->getMessage();
//}//CON ESTE METODO SE LOGRARA IDENTIFICAR CUANDO ALGUN DATO 
// //QUE SE VAYA A INGRESAR A LA BASE DE DATOS ESTE REPETIDO, ESTE LO NOTIFICARA.
//
//
////AGREGAR MASCOTA
////$dao = new Mascotascrud();
//$mascota = new Mascotas();
//$mascota->nombre = "zeus";
//
//try {
//  $estado = Mascotascrud::agregarMascota($mascota); //AGREGAR UNA MASCOTA
//  echo "MASCOTA GUARDADA EN LA BASE DE DATOS";
//} 
//catch (Exception $problema) {
//    echo $problema->getMessage();
//    
//}//CON ESTE METODO SE LOGRARA IDENTIFICAR CUANDO ALGUN DATO 
// //QUE SE VAYA A INGRESAR A LA BASE DE DATOS ESTE REPETIDO, ESTE LO NOTIFICARA.
//
//try {
//  $estado = Mascotascrud::buscarMascota(zeus); //BUSCAR MASCOTA
//  echo "id: $mascota->id<br/>";
//  echo "nombre: $mascota->nombre<br/>";
//  echo "genero: $mascota->genero<br/>";
//  echo "peso: $mascota->peso<br/>";
//  echo "tamaño: $mascota->tamaño<br/>";
//  echo "color: $mascota->color<br/>";  
//  echo "raza: $mascota->raza<br/>";
//  echo "especie: $mascota->especie<br/>";
//  echo "fechaNacimiento: $mascota->fechaNacimiento<br/>";
//  echo "propietario: $mascota->propietario<br/>";
//  echo "DomesticoOsalvaje: $mascota->DomesticoOsalvaje<br/>";
//  echo "tienVacunas: $mascota->tienVacunas<br/>";
//  echo "veterinario: $mascota->veterinario<br/>";
//  echo 'MODIFICANDO EL ID'; //MODIFICANDO LOS DATOS
//  $mascota->id ="1212121";
//  $mascota->nombre ="zeus";
//  $mascota->genero = pitbull;
//  $mascota = Mascotascrud::modificarMascota($mascota);
//  echo "CONSULTANDO EL USUARIO MODIFICADO"; //BUSCANDO LOS NUEVOS DATOS 
//  $mascota = Mascotascrud::buscarMascota(pitbull);
//  echo "id: $mascota->id<br/>";
//  echo "nombre: $mascota->nombre<br/>";
//  echo "genero: $mascota->genero<br/>";
//  echo "peso: $mascota->peso<br/>";
//  echo "tamaño: $mascota->tamaño<br/>";
//  echo "color: $mascota->color<br/>";  
//  echo "raza: $mascota->raza<br/>";
//  echo "especie: $mascota->especie<br/>";
//  echo "fechaNacimiento: $mascota->fechaNacimiento<br/>";
//  echo "propietario: $mascota->propietario<br/>";
//  echo "DomesticoOsalvaje: $mascota->DomesticoOsalvaje<br/>";
//  echo "tienVacunas: $mascota->tienVacunas<br/>";
//  echo "veterinario: $mascota->veterinario<br/>";
//} 
//catch (Exception $problema) {
//    echo $problema->getMessage();
//    
//}//CON ESTE METODO SE LOGRARA IDENTIFICAR CUANDO ALGUN DATO 
// //QUE SE VAYA A INGRESAR A LA BASE DE DATOS ESTE REPETIDO, ESTE LO NOTIFICARA.
//
//
//
////if($estado == true){
////    echo "USUARIO GUARDADO EN LA BASE DE DATOS";
////}
//// else {
////     echo "USUARIO NO GUARDADO EN LA BASE DE DATOS";
////}
//
////Mascotascrud::agregarMascota(1);
////Mascotascrud::buscarMascota(1);
////Mascotascrud::eliminarMascota(1);
////Mascotascrud::modificarMascota(1);
////Mascotascrud::listarMascota();
