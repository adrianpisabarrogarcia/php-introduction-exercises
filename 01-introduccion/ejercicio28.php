<?php

$coches = ["Audi","Seat","Mercedes","Volkswagen","BMW","Fiat"];

function imprimirArray($coches){
    foreach ($coches as $value){
        echo "<li> {$value} </li>";

    }


}

require "ejercicio28.view.php";