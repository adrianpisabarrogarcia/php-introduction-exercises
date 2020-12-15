<!DOCTYPE html>
<html lang="es">
<header>
    <title></title>
</header>
<body>

<h1>Ejecuta comandos en la shell</h1>
<form action="ejecutarComandos.php" method="GET">
    Comando: <input type="text" name="comando"><br>
    <input type="submit" name="enter" value="Enviar comando">
</form>
<?php
if (isset($output)){
    echo "Salida de datos: <br>";
    echo $output;

}

?>
</body>
</html>