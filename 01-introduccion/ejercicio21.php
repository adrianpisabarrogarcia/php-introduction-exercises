<?php

function acrosss($number)
{
    $suma = 0;
    for ($i = 0; $i <= $number && $suma <= 100-$i ; $i++) {
        if ($i % 2 == 0){
            $suma = $suma + $i;
        }
    }
    return $suma;
}


require "ejercicio21.view.php";


/*
 *
 * Una muy mala forma de hacerlo es poniendo:
 *
 * for ($i = 0; $i <= $number ; $i++) {
 *      if ($suma < 100 - $i){
 *          if ($i % 2 == 0){
                $suma = $suma + $i;
            }
 *      }else{
            break;
        }
    }
    return $suma;
 *
 *
 *
 *
 *
 */