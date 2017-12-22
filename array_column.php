<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_column</title>
</head>
<body>
<?php

    // 应用array_column的前提是输入的数组要为多维数组

    $a = [
            ['akey'=>'a','bkey'=>'b0','c',1],
            ['bkey'=>'b1'],
            ['bkey'=>'b2']
    ];

    print_r($a);
    echo '<br />';

    echo '<pre>';
    print_r(array_column($a,'bkey'));
    echo '</pre>';
?>
</body>
</html>