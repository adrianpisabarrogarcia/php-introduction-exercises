<?php

$lista = ["Ane","Markel","Nora","Danel","Amaia","Izaro"];


function imprimir($lista){
    $i = 0;
    while ($i < count($lista)){
        echo "<li>".$lista[$i]."</li>";
        $i++;
    }
}

require "ejercicio25.view.php";