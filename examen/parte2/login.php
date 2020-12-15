<?php

require "conexion.php";
$dbh = connect();

$usuarios = ["jvadillo" => "1234", "apisabarro" => "1234"];

if (isset($_POST["acceso"])) {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $entrar = comprobarExisteUsuario($dbh, $usuario, $password);

    if ($entrar) {
        header('Location: ./pacientes.php');
        die();
    }
    $entrar = false;
}

require "login.view.php";


