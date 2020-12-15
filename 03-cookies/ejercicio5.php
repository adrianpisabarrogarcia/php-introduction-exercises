<?php

$usuarios = [
    "apisabarro" => "12345Abcde",
    "jvadillo" => "54321Abcde",
    "uvadillo" => "Abcde12345"
];

if (isset($_POST["user"]) && isset($_POST["password"])  && isset($usuarios[$_POST["user"]])){
    $user = $_POST["user"];
    $password = $_POST["password"];

    $entra = comprobarUsuario($user,$password,$usuarios);

    if ($entra){
        require "ejercicio5-enter.view.php";
    }else{
        require "ejercicio5.view.php";
    }

}else{
    require "ejercicio5.view.php";
}


function comprobarUsuario($user,$password,$usuarios){
    if ($password == $usuarios[$user]){
        return true;
    }else{
        return false;
    }


}