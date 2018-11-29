<?php
$val = 2;
$pow = -5;
function power($val, $pow) {
    if ($pow === 0) {
        return 1;
    }
    if ($pow < 0) {
        return round(power(1/$val, -$pow), 5);
    }
    return $val * power($val, $pow - 1);
}

echo 'Число '.$val.' в степени '.$pow.' = '.power($val, $pow);
?>