<?php

$name ="userid";
$value ="Koen";
$path ="/";
$exp= strtotime('+1 day');
setcookie($name,$value,$exp,$path);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My Web Page</h1>
    <?php
    $expdate=strtotime('-1 day');
    echo("Hello ". $_COOKIE['userid']);
    setCookie("userid",'',$expdate,'/');
    echo("goodbye". $_COOKIE['userid']);
    ?>
    
</body>
</html>