<?php
include "./models/Publicacion.php";
use ejercicio2\models\Publicacion;

$publicacion = new Publicacion("Ramón y Adrián","2020","Edelvives", "Programación en Java","Esto es un texto de prueba");

$publicacion2 = new Publicacion("Belén y Mario","2021", "Santillana","Code Clean", "Esto es un texto de prueba2");

require "ejercicio2.view.php";