<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>deny_ips</title>
</head>
<body>
<?php

set_time_limit(30);

date_default_timezone_set('Asia/Shanghai');

if ( !file_exists('blocked_ips.txt') ) {
    $deny_ips = array(
        '::1',
        '127.0.0.1',
        '192.168.1.1',
        '83.76.27.9',
        '192.168.1.163'
    );
} else {
    $deny_ips = file('blocked_ips.txt');
}
// read user ip adress:
$ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';

// search current IP in $deny_ips array
if ( (array_search($ip, $deny_ips))!== FALSE ) {
    // address is blocked:
    die('Your IP adress ('.$ip.') was blocked.');
}

echo '<br />';

echo date('Y-m-d H:i:s');

?>
</body>
</html>