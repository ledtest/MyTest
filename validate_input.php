<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validate_input</title>
</head>
<body>

<form method="post">
    <input type="text" name="year">
    <input type="text" name="month">
    <button type="submit">提交</button>
</form>

<?php

    $year = $_SERVER['year'];
    $month = $_SERVER['month'];

    exec("cal $month $year;pwd;",$result);

    echo '<pre>';
    foreach ($result as $r) {
        echo "$r<br />";
    }
    echo '</pre>';

?>
</body>
</html>