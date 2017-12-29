<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pathinfo</title>
</head>
<body>
<?php
    echo '<pre>';
    print_r (pathinfo('/testweb/test.txt'));
    echo '</pre>';
    echo '<hr />';
    var_dump('dirname = '.pathinfo("/testweb/test.txt",PATHINFO_DIRNAME));
    echo '<hr />';
    var_dump('basename = '.pathinfo("/testweb/test.txt",PATHINFO_BASENAME));
    echo '<hr />';
    var_dump('extension = '.pathinfo("/testweb/test.txt",PATHINFO_EXTENSION));
    echo '<hr />';
    var_dump('filename = '.pathinfo('/testweb/test.txt',PATHINFO_FILENAME));
?>
</body>
</html>