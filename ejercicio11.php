<?php
function concatenar($a, $b = "anónimo"){
    return $a. ' '.$b;
}

$textoA = $_GET["textoA"];
$textoB = $_GET["textoB"];
$frase = concatenar($textoA);

include "ejercicio11.view.php";

