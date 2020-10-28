<?php
function esMayor($num1,$num2){
    return var_export($num1 > $num2);
}

echo "Es mayor 1 que 0?: ";
echo esMayor(1, 0);