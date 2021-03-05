<html>
<head>
    <title>Login</title>

</head>
<body>
<h1>Login</h1>
Introduce un usuario y contraseña válidos (ej: jvadillo // 1234) (ej2: apisabarro // 1234)<br>
<form action="login.php" method="POST">
    <input type="text" name="usuario" placeholder="usuario">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="acceso" value="Acceder">
</form>
<?php if(isset($entrar)){
    echo "<span style='color:red'>Usuario o contraseña incorrectos</span>";
} ?>
</body>
</html>
