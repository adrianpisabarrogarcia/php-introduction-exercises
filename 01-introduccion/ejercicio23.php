<?php
$students = ["Ane",  "Markel",  "Nora",  "Danel",  "Amaia",  "Izaro"];


function recorrerArray($students){
    for ($i = 0; $i < count($students); $i++){
        echo "<li>" . $students[$i] . "</li>";
    }
}

require "ejercicio23.view.php";