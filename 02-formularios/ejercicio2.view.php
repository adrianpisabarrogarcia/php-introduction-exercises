<!DOCTYPE html>
<html lang="es">
<header>
    <title></title>
</header>
<body>
<h2>Calculadora</h2>
<br><br>
<?php
if (isset($resultado)){


?>
<p>Último resultado: <?php echo $resultado; ?></p>
<?php } ?>
<br><br>
<form action="ejercicio2.php" method="get">
    <label>Primer número: </label><input type="text" name="num1"><br>
    <label>Primer número: </label><input type="text" name="num2"><br>
    <label>Seleccione la operación deseada</label>
    <select name="operacion">
        <option value="suma">suma</option>
        <option value="resta">resta</option>
        <option value="multiplicacion">multiplicacion</option>
        <option value="division">division</option>
    </select>
    <br><br>
    <input type="submit" value="Calcular">
</form>

<?php

?>
</body>
</html>