<?php 
$host = 'localhost'; 
$dbname = 'dekkerthomas'; 
$username = 'root'; 
$password = ''; 
$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8'; 
$db = new PDO($connectStr, $username, $password); 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 