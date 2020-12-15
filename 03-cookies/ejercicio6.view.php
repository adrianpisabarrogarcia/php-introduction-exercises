<!DOCTYPE html>
<html lang="es">
<header>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</header>
<body>

<?php

?>
<div class="container">
    <h1>Acceso</h1>
    <form action="ejercicio6-v2.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" name="user" class="form-control" id="exampleInputEmail1"  placeholder="Escribe usuario" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" required>
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

</div>

</body>
</html> >