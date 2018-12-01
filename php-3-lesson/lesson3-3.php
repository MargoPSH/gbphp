<?php
$region = [];
$region['Московская область'] = ['Москва', 'Зеленоград', 'Клин'];
$region['Ленинградская область'] = ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'];
var_dump($region); 
foreach ($region as $key => $reg) {
    echo $key . ':<br>';
    $strCitys = implode(", ", $region[$key]);
    echo $strCitys;
    echo '<br>';
}
?>