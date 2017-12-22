<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memory_get_usage</title>
</head>
<body>
<?php
    var_dump(memory_get_usage());   //获取内存
    $a = "laruence";                //定义一个变量
    var_dump(memory_get_usage());   //定义变量之后获取内存
    unset($a);                      //删除该变量
    var_dump(memory_get_usage());   //删除变量后获取内存
?>
</body>
</html>