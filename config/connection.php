<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbName = 'db_personal_profile';

$connect = new mysqli($hostname, $username, $password, $dbName);

if($connect->errno){
    die($connect->error);
}