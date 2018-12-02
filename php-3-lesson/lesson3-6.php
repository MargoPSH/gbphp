<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <?php
        $menu = [
            'Home',
            'News' => ['For women', 'For men', 'For kids'],
            'About',
            'Contact'
        ];
        echo '<ul>';
        var_dump($menu[1]);
        foreach ($menu as $key => $value) {            
            echo '<li><a href="#">' . $value . '</a>';
            if (is_array($value)) {
                echo '<ul>';         
                foreach ($value as $subKey => $subValue) {
                    echo '<li><a href="#">' . $subValue . '</a></li>';
                }
                echo '</ul></li>';
            } else {
                echo '</li>';
            }
        }
        echo '</ul>';
        ?>
    </nav>
</body>
</html>
<?php

?>