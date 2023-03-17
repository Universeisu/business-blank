<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "12345678";
$dbname = "business";

try
{
    $conn = new PDO("mysql:host=$severName;dbname=business;charset=UTF8",
         $userName,
         $userPassword );  

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
    echo "you are now connecting to database!" ;


} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database: " . $e->getMessage();
}
?>