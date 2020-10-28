<!DOCTYPE html>
<html>
<head>
    <title>Ej24</title>
    <style>
        table, th, td, tr{
            border: 1px solid black;
        }

    </style>
</head>
<body>

<table>
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Email</th>
    </tr>

<?php
    rellenarTablaAgenda($agenda);
?>
</table>
</body>
</html>