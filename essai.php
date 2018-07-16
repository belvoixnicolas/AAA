<?php

$host_name = 'db745063290.db.1and1.com';
$database = 'db745063290';
$user_name = 'dbo745063290';
$password = '!Nicolas019';



try {
    $conn = new PDO("mysql:host=$host_name;dbname=$database", $user_name,$password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO marques (nom)
    VALUES ('testpdo')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    ?>
