<?php
$arrayProductos = [
    0 => [
        "nombre" => "MSI Optix",
        "description" => "MSI Optix G27C4 27' LED FullHD 165Hz FreeSync Curva",
        "precio" => 249.99,
        "id" => 1
    ],
    1 => [
        "nombre" => "LG K61",
        "description" => "LG K61 4/128GB Dual SIM Titan Libre",
        "precio" => 199,
        "id" => 2
    ],
    2 => [
        "nombre" => "MSI Prestige P100",
        "description" => "MSI Prestige P100 9SD-020EU Intel Core i7-9700K/16GB/1TB+512GB SSD/RTX 2070 SUPER",
        "precio" => 1799.98,
        "id" => 3
    ],
    3 => [
        "nombre" => "Asus PG248Q",
        "description" => "Asus PG248Q 24' LED FullHD G-Sync 180Hz 3D",
        "precio" => 319.98,
        "id" => 4
    ],
    4 => [
        "nombre" => "Huawei MatePad",
        "description" => "Huawei MatePad T 10s 10.1' 2/32GB Wifi Azul",
        "precio" => 158.99,
        "id" => 5
    ]

];
session_start();

if (isset($_GET["action"])){
    $nombre = $_GET["nombre"];
    $precio = $_GET["precio"];
    $nombresSesion = "";
    if (isset($_SESSION["nombre"])){
        $_SESSION["nombre"] = $_SESSION["nombre"] . "<li>" . $nombre . "</li>";
        $_SESSION["precio"] = $_SESSION["precio"] + $precio;

    }else{
        $_SESSION["nombre"] = "<li>" . $nombre . "</li>";
        $_SESSION["precio"] = $precio;
    }
}
if (isset($_GET["vaciar"])){
    session_unset();
}
if (isset($_GET["idioma"])){
    //echo $_GET["idioma"];
    $idioma = $_GET["idioma"];
    if($idioma == "castellano"){
        setcookie("idioma", "castellano", time() + 7*24*60*60);
    }elseif ($idioma == "euskera"){
        setcookie("idioma", "euskera", time() + 7*24*60*60);
    }else{
        setcookie("idioma", "catalan", time() + 7*24*60*60);
    }
}

require "./ejercicio7.view.php";

