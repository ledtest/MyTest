<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list</title>
</head>
<body>
<?php
    $c = [1,2];

    list($a,$b) = $c;

    echo $a,$b;
?>
</body>
</html>