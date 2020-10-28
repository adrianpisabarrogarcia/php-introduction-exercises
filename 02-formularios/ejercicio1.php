<?php

if(isset($_GET["unidad"]) && isset($_GET["temperatura"])){
    $unidad = $_GET["unidad"];
    $temperatura = $_GET["temperatura"];

    if ($unidad == "celsius"){
        $resultado = $temperatura + 32;
        echo "Resultado de la conversión ". $temperatura ." celsius: ". $resultado . " farenheit";
    }else{
        $resultado = $temperatura - 32;
        echo "Resultado de la conversión ". $temperatura ." farenheit: ". $resultado . " celsius";
    }

}else{
    echo "Inserta todos los datos del formulario correctamente.";
}


