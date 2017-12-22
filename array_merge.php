<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_merge</title>
</head>
<body>
<?php
    $a = [1,2];
    $b = ['a','b','c'];

    $c = array_merge($a,$b);

    echo '<pre>';
    print_r($c);
    echo '</pre>';
?>
</body>
</html>