<?php

require "conexion.php";
$dbh = connect();

$categorias=mostrarCategorias($dbh);


if (isset($_POST["introducir"])){
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $categorias = $_POST["categorias"];
    $archivo = $_POST["archivo"];
    $archivo = "../img/files/" . $archivo;

    $idUsuario = recogerDatosUsuario($dbh, $data)
    insercionPublicacion($dbh, $titulo, $descripcion, $idUsuario, $fecha, $idCategoria, $archivo);

}else{
    require "../views/nueva-publicacion.view.php";
}



