<?php
$config = require 'config.php'; 
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';




return new QueryBuilder(

  //  die(var_dump(Connection::make()))  
Connection::make($config['database'])

);

