<!DOCTYPE html>
<html lang="es">
<header>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        a{
            color: white;
        }
        a:hover{
            color: white;
            text-underline: none;
        }
    </style>
</header>
<body class="container">

<h3>Lista de asistentes</h3>
<ul>
    <?php if (!empty($_SESSION["asistentes"])){

    ?>
    <?php echo mostrarAsistentes($_SESSION["asistentes"]); ?>
    <?php } ?>
</ul>
<h3>Añadir asistente</h3>
<form>
    <input name="asistente" type="text"><input type="submit" value="Añadir">
    <br><br>
    <button type="button" class="btn btn-primary"><a href="ejercicio4.php?action=VaciarLista">Vaciar Lista</a></button>
</form>
</body>
</html>