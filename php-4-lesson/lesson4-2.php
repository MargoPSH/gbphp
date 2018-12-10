<?php
define('IMGMIN_FOLDER', 'img/min');
define('IMGMAX_FOLDER', 'img/max');
$arrImgMin = scandir(__DIR__ . '/' . IMGMIN_FOLDER);
$divImg = '';
foreach ($arrImgMin as $value) {
    if(strlen($value) > 3) {
        $divImg .= '<a href="' . IMGMAX_FOLDER . '/' . $value . '" target="_blank">
                <img src="' . IMGMIN_FOLDER . '/' . $value . '"></a>';
    }    
}
$index = file_get_contents('index.html');
$index = str_replace('{{CODE}}', $divImg, $index);
echo $index;
?>