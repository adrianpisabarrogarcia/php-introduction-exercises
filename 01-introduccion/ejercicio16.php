<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

function ifConditional($num1,$num2){
    if ($num1 == $num2){
        return $num1 * $num2;
    }else{
        return $num1 + $num2;
    }
}

require "ejercicio16.view.php";