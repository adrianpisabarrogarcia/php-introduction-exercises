<?php

if(isset($_GET["unidad"]) && isset($_GET["temperatura"])){
    $unidad = $_GET["unidad"];
    $temperatura = $_GET["temperatura"];

    if ($unidad == "celsius"){
        $resultado = $temperatura + 32;
        require "ejercicio1.view.php";
    }else{
        $resultado = $temperatura - 32;
        require "ejercicio1.view.php";
    }

}else{
    require "ejercicio1.view.php";
}


