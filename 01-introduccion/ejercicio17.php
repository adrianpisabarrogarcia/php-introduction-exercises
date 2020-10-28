<?php
$users = [
    "user1" => [
        "nombre" => "Nora",
        "password" => "asd",
        "email" => "nota@asd.es"
    ],
    "user2" => [
        "nombre" => "Pelma",
        "password" => "asd",
        "email" => "pelma@asd.es"
    ],
];

$name = $_GET["name"];
$password = $_GET["password"];

function ifUserExists($users,$name,$password){
    //return $users[$name]["password"];
    if (!array_key_exists($name,$users)){
        return "Usuario o contraseña mal indicados.";
    } elseif ($password != $users[$name]["password"]){
        return "Contraseña mal indicadoa.";
    }
    return "Usuario o contraseña bien indicados.";
}

require "ejercicio17.view.php";

