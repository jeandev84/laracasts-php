<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<!--    <link rel="stylesheet" href="/assets/css/app.css">-->
</head>
<body>
<header>
    <ul>
        <?php foreach($person as $key => $feature): ?>
          <li><strong><?= $key ?></strong> <?= $feature ?></li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>