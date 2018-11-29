<?php
$arg1 = 8;
$arg2 = 15;
$operation = '/';
function getSumma($arg1, $arg2) {
    return $arg1 + $arg2;
}

function getDifference($arg1, $arg2) {
    return $arg1 - $arg2;
}

function getProduct($arg1, $arg2) {
    return $arg1 * $arg2;
}

function getQuotient($arg1, $arg2) {
    if ($arg2 !== 0) {
        return $arg1 / $arg2;
    } else {
        return 'На нуль делить нельзя!!!';
    }
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            echo 'Сумма чисел '.$arg1.' и '.$arg2.' = '.getSumma($arg1, $arg2);
            break;
        case '-':
            echo 'Разность чисел '.$arg1.' и '.$arg2.' = '.getDifference($arg1, $arg2);
            break;
        case '*':
            echo 'Произведение чисел '.$arg1.' и '.$arg2.' = '.getProduct($arg1, $arg2);
            break;
        case '/':
            echo 'Частное чисел '.$arg1.' и '.$arg2.' = '.round(getQuotient($arg1, $arg2), 3);
            break;
        default:
            echo 'Неизвестная операция!';
            break;
    }
}
mathOperation($arg1, $arg2, $operation);
?>