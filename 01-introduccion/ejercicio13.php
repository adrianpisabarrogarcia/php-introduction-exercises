<?php

$animales = [];
$animales[0] = "Perro";
$animales[1] = "Gato";
$animales[2] = "Loro";
$animales[3] = "Hamster";

$colores = array("Rojo","Verde","Naranja","Blanco");


function annadirElementoArrayAnimales($animales,$valor){
    array_push($animales, $valor);
    return var_dump($animales);
}
function addElementArrayColores($colores,$valor){
    array_unshift($colores,$valor);
    return var_dump($colores);
}

function mergeArrays($animales,$colores){
    $mergeArray =[];
    $mergeArray = array_merge($animales,$colores);
    return var_dump($mergeArray);
}
require "ejercicio13.view.php";
