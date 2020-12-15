<?php

$usuarios = ["jvadillo" => "1234", "apisabarro" => "1234"];

if (isset($_POST["acceso"])) {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if ($usuarios[$usuario] == $password) {
        header('Location: ./.php');
        die();
    }

    $entrar = false;
}

require "login.view.php";


