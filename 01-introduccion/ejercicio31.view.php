<!DOCTYPE html>
<html lang="es">
<header>
    <title>Ej31</title>
</header>
<body>

<ul>
        <?php
            echo "<li>El array generado es: ";
            numerosAleatorios($array);
            echo "</li>";
            echo "<li>Zerrenda: ";
            numeros($array);
            echo "</li>";
            echo "<li>El valor más alto es: ";
            valorAlto($array);
            echo "</li>";
            echo "<li>El valor más bajo es: ";
            valorBajo($array);
            echo "</li>";
        ?>
</ul>
</body>
</html>