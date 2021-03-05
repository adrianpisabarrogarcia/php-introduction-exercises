<?php

function connect(){
    try{
        $dbh = new PDO("mysql:host=127.0.0.1;dbname=pacientes","root","");
        return $dbh;
    } catch(PDOException $e){
        $e->getMessage();
        return NULL;

    }
}

function comprobarExisteUsuario ($dbh, $usuario, $password){
    $data = array("usuario"=>$usuario,"password"=> $password);
    $stmt = $dbh->prepare("SELECT *
                           FROM usuarios
                           WHERE usuario = :usuario AND contrasena = :password");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute($data);
    if($stmt->rowCount() >0){
        return true;
    }
    return false;

}