<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>is_array</title>
</head>
<body>
<?php
    $var = [1,'a'];

    echo is_array($var)?'是':'否';
    echo '<br />';

    if (is_array($var)) {

        echo in_array('a',$var)?'存在':'不存在';

    }
?>
</body>
</html>