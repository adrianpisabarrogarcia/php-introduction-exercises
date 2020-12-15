<?php

$salidaCookies = "";

if (!empty($_GET["texto"])){
    $texto = $_GET["texto"];
    meterCookies($texto);
    $salidaCookies = sacarCookies();
}

if (isset($_GET["accion"])){
    borrarCookies();
    $salidaCookies="";
}

require "ejercicio2.view.php";

function meterCookies($texto){
    setcookie("texto",$texto);
}

function sacarCookies(){
    $salidaCookies = $_COOKIE["texto"];
    return $salidaCookies;
}

function borrarCookies(){
    setcookie("texto", NULL, -1);
}
