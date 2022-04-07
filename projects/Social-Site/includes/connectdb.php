<?php 
$host = 'localhost'; 
$dbname = 'social_site'; 
$username = 'api'; 
$password = 'nmG8wjPmVgbmrqOT'; 
$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8'; 
$db = new PDO($connectStr, $username, $password); 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 