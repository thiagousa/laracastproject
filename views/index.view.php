<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
 
</head>
<body>
<header>
<ul>
<li>
 <a href='/about'> About</a>
</li>
<li>
 <a href='/contact'> Contact </a>
</li>
<li>
 <a href='/about/culture'> About US Culture </a>
</li>
</ul>
</header>

<h1> My Tasks </h1>

<ul>

<?php foreach ($tasks as $task) : ?>

<li>

<?php if ($task->status):?> 

<strike> <?= $task->description; ?> </strike>

<?php else: ?>

<?= $task->description; ?>

<?php endif; ?>

</li>

<?php endforeach; ?>

</ul>


</body>
</html>