<?php

$arrayNumeros = [];


function crearArray()
{
    $arrayNumeros2 = [];
    for ($i = 0; $i < 20; $i++) {
        $numero = random_int(1, 10);
        array_push($arrayNumeros2, $numero);
    }

    return $arrayNumeros2;
}


if (isset($_GET["numeros"])) {
    $arrayNumeros = explode(",", $_GET["numeros"]);
    $contador = 0;
    $num = $_GET["num"];
    for ($i = 0; $i < count($arrayNumeros); $i++) {
        if ($arrayNumeros[$i] == $num) {
            $contador++;
        }
    }
    echo var_dump($arrayNumeros);
} else {
    $arrayNumeros = crearArray();
}

require "ejercicio3.view.php";
