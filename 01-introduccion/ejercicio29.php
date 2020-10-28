<?php

$agenda = [
    [
        "nombre" => "Amaia",
        "apellidos" => "Gorbea Jainaga",
        "telefono" => "945111111",
        "email" => "awerwermaia@telefonica.es"
    ],
    [
        "nombre" => "Ane",
        "apellidos" => "Larrain Ogeta",
        "telefono" => "945111111",
        "email" => "aqweqeaia@telefonica.es"
    ],
    [
        "nombre" => "Maite",
        "apellidos" => "Murgiondo  Jainaga",
        "telefono" => "945111111",
        "email" => "amaiasdqwea@telefonica.es"
    ],
    [
        "nombre" => "Lorea",
        "apellidos" => "Aranceta Otxoa",
        "telefono" => "945111111",
        "email" => "amazxcia@telefonica.es"
    ],
    [
        "nombre" => "Markel",
        "apellidos" => "Gorbea Jainaga",
        "telefono" => "945111111",
        "email" => "amaiqweqea@telefonica.es"
    ],
    [
        "nombre" => "Urtzi",
        "apellidos" => "Gorbea Jainaga",
        "telefono" => "945111111",
        "email" => "adasd@telefonica.es"
    ],
];

function rellenarTablaAgenda($agenda){
    foreach ($agenda as $agenda){
        $texto = "<tr>";
        $texto .= "<td>".$agenda["nombre"]."</td>";
        $texto .= "<td>".$agenda["apellidos"]."</td>";
        $texto .= "<td>".$agenda["telefono"]."</td>";
        $texto .= "<td>".$agenda["email"]."</td>";
        $texto .= "</tr>";
        echo $texto;
    }
}



require "ejercicio29.view.php";