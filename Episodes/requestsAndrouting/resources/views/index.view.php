<?php require ('partials/head.php') ?>
<h1>Submit Your Name</h1>

<!-- GET / POST -->
<form method="POST" action="/names">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>
<?php require ('partials/foot.php'); ?>