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
        <li>
           <strong>Name: </strong> <?= $task['title'] ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong>Personal Responsible: </strong> <?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
        </li>
    </ul>
</header>
</body>
</html>