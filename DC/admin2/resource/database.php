<?php

    try{
    $conn1 = new PDO('mysql:host=127.0.0.1;dbname=canteen;charset=utf8', 'root', 'root',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('Error connecting to database');
    }
	

?> 

