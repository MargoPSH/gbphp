<?php
define('IMGMIN_FOLDER', 'img/min');
define('IMGMAX_FOLDER', 'img/max');
$arrImgMin = ['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg'];
$divImg = '';
foreach ($arrImgMin as $value) {
    $divImg .= '<a href="' . IMGMAX_FOLDER . '/' . $value . '" target="_blank">
                <img src="' . IMGMIN_FOLDER . '/' . $value . '"></a>';
}
$index = file_get_contents('index.html');
$index = str_replace('{{CODE}}', $divImg, $index);
echo $index;
?>