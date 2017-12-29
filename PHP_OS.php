<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_OS</title>
</head>
<body>
<?php
    echo PHP_OS;
    echo '<br />';
    echo php_uname('m');
    echo '<br />';
    echo PHP_VERSION;
    echo '<br />';
    echo sys_get_temp_dir();
    echo '<br />';
    echo zend_version();
    echo '<br />';
    echo php_sapi_name();
    echo '<br />';
    echo get_current_user();
    echo '<br />';
    echo $_SERVER['USER'];
    echo '<br />';
$username = getenv('USERNAME') ?: getenv('USER');
echo $username; // e.g. root or www-data
echo '<br />';
echo $_SERVER['LOGNAME'];
echo '<br />';
$processUser = posix_getpwuid(posix_geteuid());
print $processUser['name'];
?>
</body>
</html>