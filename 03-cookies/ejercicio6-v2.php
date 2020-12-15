<?php

$usuarios = [
    "apisabarro" => "12345Abcde",
    "jvadillo" => "54321Abcde",
    "uvadillo" => "Abcde12345"
];



if (isset($_POST["user"]) && isset($_POST["password"])){
    if (isset($usuarios[$_POST["user"]])){
        $user = $_POST["user"];
        $password = $_POST["password"];

        $entra = comprobarUsuario($user,$password,$usuarios);

        if ($entra){
            $_SESSION["entra"] = $user . " " . $password;
            //echo "Has iniciado ".  $_SESSION["entra"];
            require "ejercicio6-enter.view.php";
        }else{
            sesionContador();
        }
    }else{
        sesionContador();
    }


}else{
    if (isset($_GET["action"])){
        session_start();
        unset($_SESSION["entra"]);
        session_destroy();
    }
    require "ejercicio6.view.php";
}


function sesionContador(){
    session_start();
    if (isset($_SESSION["contador"])){
        $_SESSION["contador"] = $_SESSION["contador"] + 1;
        if ($_SESSION["contador"]>2){
            echo "<p style='text-align: center; color: red;'> Has superado los 3 intentos </p><br><br>";
            $_SESSION["contador"] = 0;
        }

    }else{
        $_SESSION["contador"] = 1;
    }
    require "ejercicio6.view.php";
}

function comprobarUsuario($user,$password,$usuarios){
    if ($password == $usuarios[$user]){
        return true;
    }else{
        return false;
    }


}