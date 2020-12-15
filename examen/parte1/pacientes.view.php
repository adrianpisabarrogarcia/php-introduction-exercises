<html>
<head>
    <title>Pacientes</title>
    <style>
        tr, td{
            border:1px solid red;
        }
        th{
            border:1px solid green;
        }
        table{
            border:1px solid grey;
        }
    </style>
</head>
<body>
<h1>Añadir nuevo paciente</h1>
<form action="pacientes.php" method="get">
    <b>Descripción: </b>
    <input type="text" name="codigo" placeholder="codigo paciente">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="apellidos" placeholder="apellidos">
    <input type="submit" name="envio-paciente" value="Añadir">
</form>
<hr>
<h1>Listado Pacientes</h1>
<table>
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>¿Atendido?</th>
        <th>Atender</th>
    </tr>
    <?php
    if(isset($_SESSION['pacientes'])){
        $arrayPacientes = $_SESSION["pacientes"];
        for ($i = 0; $i < count($arrayPacientes); $i++){
            echo "<tr>";
            echo "<td>".$arrayPacientes[$i]["codigo"]."</td>";
            echo "<td>".$arrayPacientes[$i]["nombre"]."</td>";
            echo "<td>".$arrayPacientes[$i]["apellidos"]."</td>";
            echo "<td>".$arrayPacientes[$i]["atendido"]."</td>";
            if ($arrayPacientes[$i]["atendido"] == 0){
                echo "<td><a href='pacientes.php?atendido=".$arrayPacientes[$i]["codigo"]."'>Marcar atendido</a></td>";
            }else{
                echo "<td> - </td>";
            }
            echo "</tr>";
        }

    }
    ?>
</table>
<br><br>
<button type="button"><a href="./pacientes.php?borrar=pacientes">Borrar todos los pacientes</a></button>
</body>
</html>