<!DOCTYPE html>
<html lang="es">
<header>
    <title></title>
</header>
<body>


<?=$salidaCookies;
?>
<br>
<br>
<form action="ejercicio2.php" method="get">
    Introduce el texto que deseas almacenar: <input type="text" name="texto"><input type="submit">
    <br>
    <button><a href="ejercicio02.php?accion=borrarCookie"></a>Borrar cookie</button>
</form>
</body>
</html>