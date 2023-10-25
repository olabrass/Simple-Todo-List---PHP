<?php
$dbhost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "todolist";
$conn = mysqli_connect($dbhost, $dbUser, $dbPass, $dbName);
if(!$conn){
    die(mysqli_error);
}
session_start();
?>