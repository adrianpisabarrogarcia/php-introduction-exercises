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
        $_SESSION["entra"] = $user . " " . $password;
        //echo "Has iniciado ".  $_SESSION["entra"];
        require "ejercicio5-enter.view.php";
    }else{
        //$_SESSION["entra"] = $user . " " . $password;
        require "ejercicio5.view.php";
    }

}else{
    if (isset($_GET["action"])){
        session_start();
        unset($_SESSION["entra"]);
        session_destroy();
        //echo "He cerrado sesión";
    }
    require "ejercicio5.view.php";
}




function comprobarUsuario($user,$password,$usuarios){
    if ($password == $usuarios[$user]){
        return true;
    }else{
        return false;
    }


}