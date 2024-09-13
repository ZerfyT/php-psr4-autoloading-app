<?php

require_once realpath(__DIR__) . '/init.php';

$myClass = new Services\MyClass();
$myClass->foo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP Test Page</h1>
</body>

</html>