<?php

$countries = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

function foundElementArray($countries, $element){
    for ($i = 0; $i < count($countries) && $element != $countries[$i]; $i++){

    }
    if ($i == count($countries)){
        return -1 . " no encontrado";
    }
    return $i ." encontrado";
}

require "ejercicio22.view.php";


