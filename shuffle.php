<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shuffle</title>
</head>
<body>
<?php
    $var1 = ['a'=>'a','b'=>'b','c'=>'c'];

    shuffle($var1);

    echo '<pre>';
    print_r($var1);
    echo '</pre>';
?>
</body>
</html>