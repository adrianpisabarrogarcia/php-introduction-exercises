<?php

function across($number)
{
    $suma = 0;
    for ($i = 0; $i <= $number; $i++) {
        if ($i % 2 == 0){
            $suma = $suma + $i;
        }
    }
    return $suma;
}


require "ejercicio20.view.php";