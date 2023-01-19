<?php
$driver = "mysql";
$host = "localhost";
$port = 3306;
$database = "latihan_pdo";
$username = "root";
$password = "";
$dns = $driver.':host='.$host.';dbname='.$database;

try{
    //Create Connection with database
    $connect = new PDO($dns, $username, $password);
    // Set Error Mode
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection to database problem: ".$e->getMessage()."<br />";
    die();
}