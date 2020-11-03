<?php


if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operacion"])) {

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operacion = $_GET["operacion"];

    switch ($operacion) {
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case "division":
            $resultado = $num1 / $num2;
    }

    require "ejercicio2.view.php";


} else {
    require "ejercicio2.view.php";
}

