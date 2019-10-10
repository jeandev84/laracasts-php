<?php

/**
 * @url http://localhost:8888?order=asc&keys=values
 * @url http://localhost:8888?order=desc
 * @url http://localhost:8888?name=John ( Mary, Jeff )
 */

$name = $_GET['name'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<header>
    <h1><?= "Hello, ". htmlspecialchars($name) ?></h1>
</header>
</body>
</html>