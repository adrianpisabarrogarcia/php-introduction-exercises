<?php
$notas = [
    [
        "nombre" => "Luis Scola",
        "nota1" => 9,
        "nota2" => 8,
        "nota3" => 8.5
    ],
     [
        "nombre" => "Pablo Prigioni",
        "nota1" => 8,
        "nota2" => 4,
        "nota3" => 6
    ],
    [
        "nombre" => "Sergi Vidal",
        "nota1" => 7,
        "nota2" => 6,
        "nota3" => 6.5
    ],
    [
        "nombre" => "Ramón Rivas",
        "nota1" => 3.5,
        "nota2" => 6,
        "nota3" => 4.75
    ]
];



function imprimirTabla($notas){
    for ($i = 0; $i < count($notas); $i++){
        $texto = "<tr>";
        $texto .= "<td>".$notas[$i]["nombre"]."</td>";
        if ($notas[$i]["nota1"] <5){
            $texto .= "<td><span style='color: red;'>".$notas[$i]["nota1"]."</span></td>";
        }else{
            $texto .= "<td>".$notas[$i]["nota1"]."</td>";
        }
        if ($notas[$i]["nota2"] <5){
            $texto .= "<td><span style='color: red;'>".$notas[$i]["nota2"]."</span></td>";
        }else{
            $texto .= "<td>".$notas[$i]["nota2"]."</td>";
        }
        if ($notas[$i]["nota3"] <5){
            $texto .= "<td><span style='color: red;'>".$notas[$i]["nota3"]."</span></td>";
        }else{
            $texto .= "<td>".$notas[$i]["nota3"]."</td>";
        }
        $texto .= "</tr>";
        echo $texto;

    }
}

require "ejercicio32.view.php";


