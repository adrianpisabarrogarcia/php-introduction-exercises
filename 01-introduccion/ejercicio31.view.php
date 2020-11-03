<!DOCTYPE html>
<html lang="es">
<header>
    <title>Ej31</title>
</header>
<body>

<ul>
        <?php
            echo "<li>El array generado es: ";
            $array2 = numerosAleatorios($array);
            echo "</li>";
            echo "<li>El valor más alto es: ";
            echo valorAlto($array2);
            echo "</li>";
            echo "<li>El valor más bajo es: ";
            echo valorBajo($array2);
            echo "</li>";
        ?>
</ul>
</body>
</html>