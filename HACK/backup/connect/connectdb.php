<?php

$host = 'localhost';

$dbname = 'hcp164831';

$username = 'hcp164831';

$password = 'b77M92dOMN';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';

$db = new PDO($connectStr, $username, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>