<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>decbin</title>
</head>
<body>
<?php

    $num = -65535;
    $num1 = 65535;

    $bin = decbin($num);
    $bin1 = decbin($num1);

    echo $num1.'的二进制为：'.$bin1;
    echo '<br />';
    echo $num1.'的二进制反码为：'.decbin($num1 & 0xffff);
    echo '<br />';
    echo $num1.'对应的二进制的字符长是：'.mb_strlen($bin1);
    echo '<br />';
    echo $num.'的二进制为：'.$bin;
    echo '<br />';
    echo $num.'的二进制反码为：'.$bin;
    echo '<br />';

    if (php_uname('m') == 'x86_64') {
        echo '64位模式下高位补零后的反码为：'.str_pad($bin1,64,'0',STR_PAD_LEFT);
    }

    echo '<br />';
    echo $num.'的二进制的反码对应的补码为： '.$bin;
    echo '<br />';
    echo '其对应的二进制的字符长是：'.mb_strlen($bin);
    echo '<br />';
    echo hexdec('0xffff');
    echo '<br />';
    echo decbin(hexdec('0xffff'));
    echo '<br />';
    echo mb_strlen(decbin(hexdec('0xffff')));
?>
</body>
</html>