<?php require ('partials/head.php') ?>

<?php foreach($users as $user): ?>
  <li><?= $user->name ?></li>
<?php endforeach; ?>
<h1>Submit Your Name</h1>

<!-- GET / POST -->
<form method="POST" action="/names">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>
<?php require ('partials/foot.php'); ?>