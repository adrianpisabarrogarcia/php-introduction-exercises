<?php

function across($number){
    $suma = 0;
    for ($i = 0; $i <= $number; $i++){
        $suma = $suma + $i;
    }
    return $suma;
}


require "ejercicio19.view.php";