<?php
$b = 5;
$c = 3;
$g = (7 * $b - 3) % ($c * $c + 1);
echo "Valor de g: " , $g;
echo "<br>";
$a = 2;
$f = (4 * $a * $a * $a) + $g * (2 * $a - 3 * $a);
echo "Valor de f: " , $f;
echo "<br>";

if (isset($_POST["tx"]) && isset($_POST["ty"]) && isset($_POST["tz"])) {
    $x = $_POST["tx"];
    $y = $_POST["ty"];
    $z = $_POST["tz"];
    $h = $f * ($x / $y) + 3 * $g * ($z / $y * $x);
    echo "Valor de h: " , $h;
}
?>
