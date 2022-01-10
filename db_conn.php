<?php


$sName = "localhost";
$uName = "root";
$pass = "27598018za";
$db_name = "todolist";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection faild : " . $e->getMessage();
}