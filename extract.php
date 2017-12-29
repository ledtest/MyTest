<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>extract</title>
</head>
<body>
<?php

    var_dump(empty($a));
    echo '<br />';

    $var = ['a'=>'中国','b'=>'北京','c'=>'天安门'];

    extract($var);

    echo $a,$b,$c;
?>
</body>
</html>