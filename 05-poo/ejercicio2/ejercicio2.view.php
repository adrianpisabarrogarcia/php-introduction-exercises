<!DOCTYPE html>
<html lang="es">
<header>
    <title>ejercicio 1</title>
</header>
<body>
<h1>Objeto 1</h1>
<?php
echo "- Imprimo el objeto 1 entero:";
echo var_dump($publicacion);
echo "- Imprimo el método leer: <br>";
echo "<i>".$publicacion->leer()."</i><br>";
echo "- Imprimo el método escribir: <br>";
echo "<i>". $publicacion->escribir("(Este es escrito por mi :)")."</i>";
?>
<br>

<h1>Objeto 2</h1>
<?php
echo "- Imprimo el objeto 1 entero:";
echo var_dump($publicacion2);
echo "- Imprimo el método leer: <br>";
echo "<i>".$publicacion2->leer()."</i><br>";
echo "- Imprimo el método escribir: <br>";
echo "<i>". $publicacion2->escribir("(Hola caracola)")."</i>";
?>
<br>

</body>
</html>