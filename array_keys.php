<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_keys</title>
</head>
<body>
<?php

    //$var = ['a'=>1,'b'=>2,'c'=>3];
    $var = [1,2,3];

    echo '<pre>';
    print_r(array_keys($var));
    echo '</pre>';

?>
</body>
</html>