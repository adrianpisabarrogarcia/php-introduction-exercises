<!DOCTYPE html>
<html lang="es">
<header>
    <title></title>
</header>
<body>
<?php
if (isset($contador)) {
    ?>
    El numero aparece <?php echo $contador; ?> veces en el array.
<?php } ?>
<br><br>
<form action="ejercicio3.php" method="get">
    Introduce tu número: <input type="number" name="num" required>
    <input type="submit" value="¡Probar Suerte!">
    <input type="hidden" name="numeros" value="<?= implode(",", $arrayNumeros); ?>">
</form>
</body>
</html>