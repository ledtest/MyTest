<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get_defined_vars</title>
</head>
<body>
<?php

    $var1 = 'hello';
    $var2 = 'world';
    $var3 = '.';
    $var4 = null;

    echo '<pre>';
    print_r(get_defined_vars());
    echo '</pre>';
    echo '<hr />';
    echo '<pre>';
    //print_r(compact(array_keys(get_defined_vars())));
    print_r(compact(['var1','var2','var3']));
    //print_r(compact('var1','var2','var3','var4'));
    echo '</pre>';
    echo '<hr />';
    var_dump([$var4]);
?>
</body>
</html>