<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<!--    <link rel="stylesheet" href="/assets/css/app.css">-->
</head>
<body>
<header>

    <h1>Task For The Day</h1>
    <ul>
        <?php foreach($task as $heading => $value): ?>
          <li>
              <strong><?= ucwords($heading) ?>: </strong> <?= $value ?>
          </li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>