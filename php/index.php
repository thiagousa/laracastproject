<?php

// title , due , assigned_to , completed

$taks = array (

array(
'title' => 'Go to the mall',
'due'=> 'Today',
'assigned_to' => 'Thiago',
'completed' => 'Yes',
),
array(
    'title' => 'Go to the grocery',
    'due'=> 'Tomorow',
    'assigned_to' => 'Mary',
    'completed' => 'No',
),
array(
        'title' => 'Send E-mail',
        'due'=> 'Yesterday',
        'assigned_to' => 'Joao',
        'completed' => 'Yes',
),
);

foreach($taks as $tak){

echo '<dl style="margin-bottom: 1em;">';
foreach ($tak as $key => $value) {
    echo "<dt>$key</dt><dd>$value</dd>";

    echo '</dl>';
}
}
//require 'index.view.php';
