<?php

$arrayNumeros = [];


function crearArray($arrayNumeros)
{

    for ($i = 0; $i < 21; $i++) {
        $numero = random_int(1, 10);
        array_push($arrayNumeros, $numero);
    }
}


if (isset($_GET["numeros"])){
    $arrayNumeros = explode(",", $_GET["numeros"]);
    $contador = 0;
    $num = $_GET["num"];
    for ($i = 0; $i < count($arrayNumeros); $i++) {
        if ($arrayNumeros[$i] == $num) {
            $contador++;
        }
    }
    echo var_dump($arrayNumeros);
}else{
    crearArray($arrayNumeros);
    var_dump($arrayNumeros);
}

require "ejercicio3.view.php";
