<!DOCTYPE html>
<html lang="es">
<header>
    <title></title>
</header>
<body>

<h2>Cookies</h2>

<?php if(isset($_GET["idioma"])){
?>
Idioma:
<?php echo $idioma;?>
<?php } ?>

<form>
    Elige tu idioma:
    <select name="idioma">
        <option>Euskera</option>
        <option>Castellano</option>
    </select>
    <input type="submit" value="Enviar">
</form>
</body>
</html>