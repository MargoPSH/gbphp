<?php
$a = 8;
$b = 0;
function getSumma($a, $b) {
    return $a + $b;
}

function getDifference($a, $b) {
    return $a - $b;
}

function getProduct($a, $b) {
    return $a * $b;
}

function getQuotient($a, $b) {
    if ($b !== 0) {
        return $a / $b;
    } else {
        return 'На нуль делить нельзя!!!';
    }
}

echo 'Сумма чисел '.$a.' и '.$b.' = '.getSumma($a, $b).'<br>';
echo 'Разность чисел '.$a.' и '.$b.' = '.getDifference($a, $b).'<br>';
echo 'Произведение чисел '.$a.' и '.$b.' = '.getProduct($a, $b).'<br>';
echo 'Частное чисел '.$a.' и '.$b.' = '.getQuotient($a, $b).'<br>';
?>