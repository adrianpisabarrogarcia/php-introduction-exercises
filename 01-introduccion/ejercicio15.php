<?php
$diccionario = [
    "jvadillo" => array(
        "Nombre" =>"jon",
        "Apellidos" =>"vadillo",
        "Email" =>"jvadillo@sani.org"
    ),
    "apisabarro" => array(
        "Nombre" =>"adri",
        "Apellidos" =>"pisabarro",
        "Email" =>"apisabarro@sani.org"
    )
];
function getDatos($diccionario,$user,$element){


    return $diccionario[$user][$element];


}

require "ejercicio15.view.php";