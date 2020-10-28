<?php
function union ($cadena1 = "Caracola ", $cadena2){
    return $cadena1 . $cadena2;
}

$concat = union("Hola", "que tal?");
echo $concat;

/**************/
print "<br>";
function union2 ($cadena1 , $cadena2){
    return $cadena1 . $cadena2;
}
$caden = "CARACOLA ";
$concat = union2($caden , "que tal?");
echo $concat;