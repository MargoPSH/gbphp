<?php
$var1 = 10;
$var2 = 250;
echo "var1 = {$var1}, var2 = {$var2} <br>";
$var2 = [$var1, $var1 = $var2][0];
echo "var1 = {$var1}, var2 = {$var2} <br>";
?>