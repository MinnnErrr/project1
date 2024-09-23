<?php

$servername = "localhost";
$user = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername; dbname=web1", $user, $password);
    //set the PDO error mode to execption
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log("Connected successfully", 0);
}catch(PDOException $e){
    error_log("Connection failed: ".$e->getMessage(), 0);
}

?>






