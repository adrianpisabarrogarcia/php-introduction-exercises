<?php

$idiomaSeleccionado = "";

if (isset($_GET["idioma"])){
    $idioma = $_GET["idioma"];
    rellenarCookies($idioma);

}


require "ejercicio3.view.php";

function rellenarCookies($idioma){
    setcookie("idioma",$idioma, time() + 60);
}



