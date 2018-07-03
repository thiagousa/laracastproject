<?php

class QueryBuilder{

protected $pdo;


public function __construct($pdo){

    $this->pdo = $pdo;
}



public function selectAll($table){

    $statement = $this->pdo->prepare("Select * from todos {$table} ");

    $statement->execute();

    return  $sql = $statement->fetchAll(PDO::FETCH_CLASS);




}


}