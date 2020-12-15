<!DOCTYPE html>
<html lang="es">
<header>
    <title>Amazon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</header>
<body class="container">


<h3>Amazon</h3>
<hr>
<?php
if (isset($_COOKIE["idioma"])){
    if($_COOKIE["idioma"] == "castellano"){
        echo "<span style='text-align:center;'>Bienvenido/a</span>";
    }
    if ($_COOKIE["idioma"] == "euskera"){
        echo "<span style='text-align:center;'>Ongietorri!</span>";
    }
    if($_COOKIE["idioma"] == "catalan"){
        echo "<span style='text-align:center;'>Benvingut/Benvinguda</span>";
    }
}
?>
<br><br>
<h5>Selecciona idioma</h5>
<form action="ejercicio7.php" method="GET">
    <select name="idioma" class="form-control" id="exampleFormControlSelect1">
        <option value="castellano">Castellano</option>
        <option value="euskera">Euskera</option>
        <option value="catalan">Catalán</option>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Seleccionar</button>

</form>
<br><br>
<h5>Cesta de la compra</h5>

<?php
if (isset($_SESSION["nombre"])){
    echo $_SESSION["nombre"];
    echo "<br><h6>Precio total: " . $_SESSION["precio"] . "€</h6>";
    ?>
    <button type="button" class="btn btn-primary"><a href="./ejercicio7.php?vaciar=lista" style="color: white">Vaciar Lista</a></button>
<?php
}else{
    echo "<h6>No hay productos en la lista</h6>";
}
?>
<br><br>
<h5>Catálogo de productos</h5>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
    </tr>
    </thead>
    <tbody>
    <?php for($i = 0; $i < count($arrayProductos); $i++){ ?>
        <tr>
            <td><?php echo $arrayProductos[$i]["nombre"]; ?></td>
            <td><?php echo $arrayProductos[$i]["description"]; ?></td>
            <td><?php echo $arrayProductos[$i]["precio"]."€"; ?></td>
            <form method="GET" action="ejercicio7.php">
            <td><input type="submit" name="action" value="añadir a la cesta"></td>
                <input type="hidden" name="nombre" value="<?= $arrayProductos[$i]["nombre"]; ?>">
                <input type="hidden" name="precio" value="<?= $arrayProductos[$i]["precio"]; ?>">

            </form>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
