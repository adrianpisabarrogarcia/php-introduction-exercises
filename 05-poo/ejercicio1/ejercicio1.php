<?php

include "./Publicacion.php";

$publicacion = new Publicacion("Ramón y Adrián","2020","Edelvives", "Programación en Java","Esto es un texto de prueba");

$publicacion2 = new Publicacion("Belén y Mario","2021", "Santillana","Code Clean", "Esto es un texto de prueba2");

require "ejercicio1.view.php";