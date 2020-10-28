<!DOCTYPE html>
<html lang="es">
<header>
    <title>Ej32</title>
    <style>
        table, tr, th, td{
            border: 1px solid black;
        }
    </style>
</header>
<body>

<h2>Tabla</h2>
<table>
    <tr>
        <th>Nombre</th>
        <th>Nota1</th>
        <th>Nota2</th>
        <th>Nota media</th>
    </tr>
<?php
    imprimirTabla($notas);
?>
</table>
</body>
</html>