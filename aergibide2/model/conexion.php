<?php
session_start();
function connect()
{
    try {
        $host = "127.0.0.1";
        $dbname = "reto2";
        $user = "root";
        $pass = "";

        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    } catch (PDOException $e) {
        $e->getMessage();
        return null;
    }
}

function close()
{
    $dbh = null;
}




function entrarLogin($dbh, $usuario, $password)
{
    $data = array('user' => $usuario);
    $stmt=recogerDatosUsuario($dbh, $data);
    if ($stmt->rowcount() > 0) {
        // Comprobar contraseña correcta
        // Comprobar la contraseña introducida


        while ($row = $stmt->fetch()) {
            $hash2 = $row->Password;
            if (md5($password) == $hash2) {
                // Si es que si lo guardo en sesión
                $_SESSION["usuario"] = $usuario;
                return true;
            }
        }
    }
    return false;

}
function guardarDatosUsuario($dbh){
    $data=array('user'=>$_SESSION['usuario']);
    $stmt=recogerDatosUsuario($dbh,$data);
    return $stmt;
}

function recogerDatosUsuario($dbh,$data){
    $stmt = $dbh->prepare("SELECT * FROM Usuario WHERE Correo = :user OR Usuario = :user");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);
    return $stmt;
}

function registrarLogin($dbh, $usuario, $nombre, $apellido, $email, $password)
{
    //Comprueba si existe en la bbdd
    $data = array('user' => $usuario, 'email' => $email);
    $stmt = $dbh->prepare("SELECT * FROM Usuario WHERE Correo = :email OR Usuario = :user");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);
    if ($stmt->rowcount() > 0) {
        return false;
    }
    insercionRegistro($dbh, $usuario, $nombre, $apellido, $email, $password);
    return true;

}

function insercionRegistro($dbh, $usuario, $nombre, $apellido, $email, $password)
{
    //Una vez hecha la comprobación bbdd lo vamos a insertar
    //Necesito añadir una imagen predeterminada que estará en la siguiente ruta:
    $rutaImagenPredeterminada = "../img/uploads/persona.jpg";
    // Crear la contraseña:
    $hash = md5($password);
    $data = array('nombre' => $nombre, 'apellido' => $apellido, 'usuario' => $usuario, 'correo' => $email, 'password' => $hash, 'imagen' => $rutaImagenPredeterminada);
    $stmt = $dbh->prepare("INSERT INTO Usuario (Nombre, Apellido, Usuario, Correo, Password, Imagen) VALUES (:nombre, :apellido, :usuario, :correo, :password, :imagen);");

    $stmt->execute($data);


}

function generarPublicaciones($dbh){
    $stmt= $dbh->prepare("SELECT Pregunta.ID as ID,Pregunta.Titulo AS Titulo, Pregunta.Descripcion AS Descripcion, Usuario.Usuario as Usuario, Pregunta.Fecha as Fecha, Pregunta.ID_Categoria as Categoria, Pregunta.Archivo as Archivo
                            FROM Pregunta, Usuario
                            WHERE Pregunta.ID_Usuario= Usuario.ID
                            GROUP BY Pregunta.ID
                            ORDER BY Pregunta.Fecha DESC ;");
    $stmt ->setFetchMode(PDO::FETCH_OBJ);

    $stmt->execute();
    return $stmt;
}

function generarRespuestas($pregunta, $dbh){
    $data= array ('pregunta'=>$pregunta);
    $stmt = $dbh ->prepare("SELECT ID_Pregunta
                            FROM Respuesta
                            WHERE ID_Pregunta= :pregunta");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);

    return $stmt;
}

function mostrarCategorias($dbh){
    $stmt= $dbh->prepare("SELECT Descripcion AS cat FROM Categoria
                            ORDER BY ID asc");
    $stmt-> setFetchMode(PDO::FETCH_OBJ);
    $stmt ->execute();

    return $stmt;
}

function mostrarPublicacionPorCategoria($cat, $dbh){

    $data= array("category"=>utf8_decode($cat));
    $stmt= $dbh->prepare("SELECT Pregunta.ID as ID,Pregunta.Titulo AS Titulo, Pregunta.Descripcion AS Descripcion, Usuario.Usuario as Usuario, Pregunta.Fecha as Fecha, Pregunta.ID_Categoria as Categoria, Pregunta.Archivo as Archivo
                            FROM Pregunta, Usuario, Categoria
                            WHERE Pregunta.ID_Usuario= Usuario.ID
                            AND Pregunta.ID_Categoria =Categoria.ID 
                            AND Categoria.Descripcion = :category 
                            GROUP BY Pregunta.ID
                            ORDER BY Pregunta.Fecha DESC ;");
    $stmt ->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);
    return $stmt;
}

function generarMisPublicaciones($dbh){
    $usuario = $_SESSION["usuario"];
    $data = array('usuario' => $usuario);
    $stmt= $dbh->prepare("SELECT Pregunta.ID as ID,Pregunta.Titulo AS Titulo, Pregunta.Descripcion AS Descripcion, Usuario.Usuario as Usuario, Pregunta.Fecha as Fecha, Pregunta.ID_Categoria as Categoria, Pregunta.Archivo as Archivo
                            FROM Pregunta, Usuario
                            WHERE Pregunta.ID_Usuario= Usuario.ID
                            AND (Usuario.Usuario = :usuario OR Usuario.Correo = :usuario)
                            GROUP BY Pregunta.ID
                            ORDER BY Pregunta.Fecha DESC ;");
    $stmt ->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);
    return $stmt;
}

function generarMisFavoritos($dbh){
    $usuario=guardarDatosUsuario($dbh);
    $row=$usuario->fetch();
    $user=$row->ID;
    $data=array("id"=>$user);
    $stmt= $dbh->prepare("SELECT Pregunta.ID as ID,Pregunta.Titulo AS Titulo, Pregunta.Descripcion AS Descripcion, Usuario.Usuario as Usuario, Pregunta.Fecha as Fecha, Pregunta.ID_Categoria as Categoria, Pregunta.Archivo as Archivo
                            FROM Pregunta, Usuario, Favoritos
                            WHERE Pregunta.ID_Usuario = Usuario.ID
                            AND Pregunta.ID = Favoritos.ID_Pregunta
                            AND Favoritos.ID_Usuario = :id;");
    $stmt ->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);
    return $stmt;
}

function mostrarPublicacionPorBuscador($title, $dbh){
    $data= array("tituloPorBuscador"=>utf8_decode($title));
    $stmt= $dbh->prepare("SELECT Pregunta.ID as ID,Pregunta.Titulo AS Titulo, Pregunta.Descripcion AS Descripcion, Usuario.Usuario as Usuario, Pregunta.Fecha as Fecha, Pregunta.ID_Categoria as Categoria, Pregunta.Archivo as Archivo
                            FROM Pregunta, Usuario
                            WHERE Pregunta.ID_Usuario= Usuario.ID
                            AND LOWER(Pregunta.Titulo) LIKE CONCAT('%',:tituloPorBuscador,'%')
                            GROUP BY Pregunta.ID
                            ORDER BY Pregunta.Fecha DESC ;");
    $stmt ->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);
    return $stmt;
}


function insercionPublicacion($dbh, $titulo, $descripcion, $idUsuario, $fecha, $idCategoria, $archivo)
{
    //Una vez hecha la comprobación bbdd lo vamos a insertar
    //Necesito añadir una imagen predeterminada que estará en la siguiente ruta:
    $rutaImagenPredeterminada = "../img/uploads/persona.jpg";
    // Crear la contraseña:
    $hash = md5($password);
    $data = array('nombre' => $nombre, 'apellido' => $apellido, 'usuario' => $usuario, 'correo' => $email, 'password' => $hash, 'imagen' => $rutaImagenPredeterminada);
    $stmt = $dbh->prepare("INSERT INTO Usuario (Nombre, Apellido, Usuario, Correo, Password, Imagen) VALUES (:nombre, :apellido, :usuario, :correo, :password, :imagen);");

    $stmt->execute($data);


}





$dbhcerrar = close();




