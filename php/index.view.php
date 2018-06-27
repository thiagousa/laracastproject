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
<h1> Taks for the Day</h1>
<ul>
<li> 
<strong>Name:  </strong><?= $task['title']; ?>

</li>
<li> 
<strong>Due Date::  </strong><?= $task['due']; ?>

</li>
<li> 
<strong>Personal Responsible:  </strong><?= $task['assigned_to']; ?>

</li>
<li> 
<strong>Status:  </strong><?= $task['completed'] ? 'Complete': 'Imcomplete' ; ?>

</li>

</ul>

</body>
</html>