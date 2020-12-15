<?php

session_start();
if (!isset($_SESSION["asistentes"])){
    $_SESSION["asistentes"] = array ();
}

if (isset($_GET["asistente"])){
    $asistente = $_GET["asistente"];
    array_push($_SESSION["asistentes"], $asistente);
}

if (isset($_GET["action"])){
    eliminarSesion($_SESSION["asistentes"]);
}


require "ejercicio4.view.php";


function mostrarAsistentes($asistentes){
    $texto = "";
    for ($i = 0; $i < count($asistentes); $i++){
        $texto .= "<li>";
        $texto .= $asistentes[$i];
        $texto .= "</li>";
    }

    return $texto;

}

function eliminarSesion($array){
    unset($_SESSION["asistentes"]);
    session_unset();
    session_destroy();
    unset($array);
}


