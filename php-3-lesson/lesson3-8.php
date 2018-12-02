<?php
$region = [];
$region['Московская область'] = ['Москва', 'Зеленоград', 'Клин'];
$region['Ленинградская область'] = ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'];
foreach ($region as $key => $reg) {    
    echo $key . ':<br>';
    $strCitys = '';
    $masCitys = [];
    foreach ($reg as $keyCity => $city) {        
        if (mb_substr($city, 0, 1) === "К") {
            $masCitys[] = $city;
            $strCitys = implode(", ", $masCitys);            
        }
    }
    echo $strCitys;
    echo '<br>';
}
?>