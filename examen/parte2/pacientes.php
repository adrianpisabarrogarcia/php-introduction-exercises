<?php
session_start();
if(!isset($_SESSION["pacientes"])){
    $_SESSION["pacientes"] = array();
}


if (isset($_GET['envio-paciente'])) {
    $codigo = $_GET['codigo'];
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $atendido = 0;


    array_push($_SESSION["pacientes"],array(
        "codigo"=>$codigo,
        "nombre"=>$nombre,
        "apellidos"=>$apellidos,
        "atendido"=>$atendido)
    );

}
if (isset($_GET['borrar'])) {
    session_unset();
}
if (isset($_GET['atendido'])) {
    $laSesion = $_SESSION['pacientes'];
    $atendido = $_GET['atendido'];
    for ($i = 0; $i < count($laSesion); $i++){
        if ($laSesion[$i]["codigo"] == $atendido){
            $laSesion[$i]["atendido"] = 1;
            $_SESSION['pacientes'] = $laSesion;
            break;
        }
    }

}


require "pacientes.view.php";