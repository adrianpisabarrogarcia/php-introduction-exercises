<?php
$a = $_GET["num1"];
$b = $_GET["num2"];

echo "SUMA = " . ($a + $b);
echo "<br>";
echo "RESTA= " . ($a / $b);
echo "<br>";
echo "A MAYOR QUE B = " . ($a > $b); //devuelve un 1 si es true
echo "<br>";
echo "A MENOR O IGUAL QUE B = " . ($a <= $b); //no deveuelve nada si es false
echo "<br>";
echo "A MAYOR QUE B = " ;
echo var_export($a > $b);
echo "<br>";
echo "A MENOR O IGUAL QUE B = " ;
echo var_export($a <= $b);

?>
