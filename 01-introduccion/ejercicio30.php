<?php

$notas = [
    "Amaia" => "6.5",
    "Ane" => "7.5",
    "Maite" => "5.2",
    "Lorea" => "9.1",
    "Markel" => "6.8",
    "Urtzi" => "8.4"

];


function imprimirArray($notas){
    foreach ($notas as $key => $value){
        echo "<li> La nota media de " . $key . " es " . $value;

    }
}

require "ejercicio30.view.php" ;