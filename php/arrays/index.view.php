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
        <?php foreach($names as $name): ?>
          <li>
              <strong>Item:<?= $name ?></strong>
              <a href=""></a>
          </li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>