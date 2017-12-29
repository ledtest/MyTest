<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>parse_url</title>
</head>
<body>
<?php
    //$url = 'http://www.baidu.com/index.php/index?a=1#top';
    $url = 'http://username:password@hostname/path?arg=value#anchor';

    echo 'url = '.$url;
    echo '<br />';

    echo '<pre>';
    print_r(parse_url($url));
    echo '</pre>';
?>
</body>
</html>