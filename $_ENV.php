<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_ENV</title>
</head>
<body>
<?php
    var_dump($_ENV['USER']);

    var_dump(getenv('USER'));

    var_dump($_SERVER['USER']);

    var_dump(getenv('DOCUMENT_ROOT'));

    echo '<br />';

    //echo 'SERVER_ADDR = '.apache_getenv('SERVER_ADDR');

    echo '<br />';

    echo 'XFF = '.getenv('HTTP_X_FORWARDED_FOR');

    echo '<br />';

    echo $_SERVER['REMOTE_ADDR'];
?>
</body>
</html>