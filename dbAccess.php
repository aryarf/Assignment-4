<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bandar_ilkom";

$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$connect){
  die('Cannot connect to database'. mysql_error());
}
?>