<?php 

function dd($data){

    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';

}



function connectToDb(){

    try{
 
        $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=mytodo',
                  'root',
                  '');

       return $conn;  
       

    }
   
    catch( PDOexception $e){


        die($e->getMessage());


    }

}

function fetchAllTasks($pdo){


    $statement = $pdo->prepare('Select * from todos');

    $statement->execute();

    return  $sql = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

    
}





