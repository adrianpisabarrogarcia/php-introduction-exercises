<?php
function union ($cadena1, $cadena2){
    return $cadena1 . $cadena2;
}

$concat = union("hola ", "que tal?");
echo $concat;