<?php

$coches = ["Audi","Seat","Mercedes","Volkswagen","BMW","Fiat"];

function imprimirArray($coches){
    $i = 0;
    do{
        echo "<li>".$coches[$i]."</li>";
        $i++;
    }while($i < count($coches));
}

require "ejercicio26.view.php";