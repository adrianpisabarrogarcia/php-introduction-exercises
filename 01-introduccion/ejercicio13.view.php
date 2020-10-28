<html>
<header>
    <title>

    </title>
</header>
<body>
<h2>Calcula el número de elementos de cada array.</h2>
Array Animales, Cantidad:
<?php
    echo count($animales);
?>
<br>
Array Colores, Cantidad:
<?php
    echo count($colores);
?>
<br><br>
<h2>Añade un elemento al final del array $animales utilizando una función.</h2>
<?php
    echo annadirElementoArrayAnimales($animales,"Ratón");
?>
<h2>Añade un elemento al principio del array $colores utilizando una función.</h2>
<?php
    echo addElementArrayColores($colores, "Gris")
?>
<h2>Crea un tercer array que incluya los elementos de los dos arrays.</h2>
<?php
    echo mergeArrays($animales, $colores);
?>
</body>
</html>