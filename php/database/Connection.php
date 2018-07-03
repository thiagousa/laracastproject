<?php

class Connection

{

public static function make(){

    try{
 
        return new PDO('mysql:host=127.0.0.1;port=3306;dbname=mytodo',
                  'root',
                  '');
       

    }
   
    catch( PDOexception $e){


        die($e->getMessage());


    }


}




}