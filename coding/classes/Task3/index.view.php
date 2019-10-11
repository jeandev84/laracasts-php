<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<!--    <link rel="stylesheet" href="/assets/css/app.css">-->
</head>
<body>
  <ul>
    <?php foreach ($tasks as $task): ?>
      <li>
          <?php if($task->isComplete()): ?>
              <strike><?= $task->getDescription() ?></strike>
          <?php else: ?>
              <?= $task->getDescription() ?>
          <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>