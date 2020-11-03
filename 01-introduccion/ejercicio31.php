<?php
$array = [];

function numerosAleatorios($array){
    for ($i = 0; $i < 20; $i++){
        $numero = rand(1,999);
        array_push($array, $numero);
        echo $array[$i].", ";
    }
    return $array;
}

function numeros($array){

    foreach ($array as $value2){
        echo $value2;
    }
}


function valorAlto($array){
    $valorMas = 0;
    foreach ($array as $value){
        if($value > $valorMas){
            $valorMas = $value;
        }
    }
    return $valorMas;
}
function valorBajo($array){
    $valorMenos = valorAlto($array);
    foreach ($array as $value){
        if($value < $valorMenos){
            $valorMenos = $value;
        }
    }
    return $valorMenos;
}

require "ejercicio31.view.php";