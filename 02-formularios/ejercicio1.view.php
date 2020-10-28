<!DOCTYPE html>
<html lang="es">
<header>
    <title></title>
</header>
<body>
<b>Resultado de la conversión (...) celsius: (...)</b><br><br>
<form action="ejercicio1.php" method="get">
    <label>Introduce la temperatura: </label><input type="text" name="temperatura" required><br>
    <label>Indica la unidad de la temperatura introducida: </label>
    <select name="unidad" required>
        <option value="celsius" selected>Celsius</option>
        <option value="farenheit">Farenheit</option>
    </select><br><br>
    <input type="submit" value="Enviar">
</form>
<?php

?>
</body>
</html>