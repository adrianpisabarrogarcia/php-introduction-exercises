<?php

$grupos = ["The Beatles","Queen","U2",
    "Maria Isabel",
    "Lez Zeppelin",
    "Los Gemeliers",
    "Samsonite",
    "Kiss"];

function mostrarGrupos($grupos){
    foreach ($grupos as $value){
        echo "Grupo: ".$value."<br>";
    }
}
require "ejercicio27.view.php";
