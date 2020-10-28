<?php
$array = ["Paris","Berlin","Amsterdam","Praga"];

function getValor($array, $posicion){
    return $array[$posicion];
}

function setValor($array, $posicion, $valor){
    $array[$posicion] = $valor;
    return var_dump($array);
}

require "ejercicio12.view.php";