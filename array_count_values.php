<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_count_values</title>
</head>
<body>
<?php
    $a = ['a','b','c','c','a',0,1,2,3,4,5,5];

    echo '<pre>';
    print_r(array_count_values($a));
    echo '</pre>';
?>
</body>
</html>