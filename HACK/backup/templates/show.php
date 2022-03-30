<?php

include "script/connectdb.php";

$sql = "SELECT * FROM post";

$sth = $db->prepare($sql);

$sth->execute();

?>
