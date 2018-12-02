<?php
$region = [];
$region['Московская область'] = ['Москва', 'Зеленоград', 'Клин'];
$region['Ленинградская область'] = ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'];
foreach ($region as $key => $reg) {
    echo $key . ':<br>';
    $strCitys = implode(", ", $region[$key]);
    echo $strCitys;
    echo '<br>';
}
?>