<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>filter_var</title>
</head>
<body>
<?php

    error_reporting(E_ALL & ~E_NOTICE);//error_reporting(E_ALL ^ E_NOTICE);
    set_time_limit(1);
    //sleep(2);

    $var1 = '10.0';

    $var2 = '10.0';

    $var3 = 10.0;

    $var4 = 10.1;

    echo is_float($var4);
    echo '<br />';
    echo is_double($var4);
    echo '<br />';
    var_export(is_int($var4));
    echo '<br />';
    echo is_numeric($var4);
    echo '<br />';


    var_dump(filter_var($var1,FILTER_VALIDATE_INT));
    echo '<hr />';
    var_dump(filter_var($var2,FILTER_VALIDATE_INT));
    echo '<hr />';
    var_dump(filter_var($var3,FILTER_VALIDATE_INT));
    echo '<hr />';
    var_dump(filter_var($var4,FILTER_VALIDATE_INT));
    echo '<hr />';
    var_dump(filter_var($var4,FILTER_VALIDATE_FLOAT));
?>
</body>
</html>