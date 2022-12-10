<?php include "../include/connectdb.php"; ?>
<?php
$drink = $_POST['drink'];
$sql_1 = "SELECT * FROM `drink` WHERE drink = :drink"; 
    $sth_1 = $db->prepare($sql_1); 
    $sth_1->execute([':drink' => $drink]);
    while($row = $sth_1->fetch()) : 
        echo $row['drink'];
        echo "<br>";
        echo $row['drink_count'];
        $new_count = $row['drink_count'] + 1;
        echo "<br>";
        echo $new_count;
    endwhile; 
    $sql_2 = "UPDATE `drink` SET drink_count = :drink_count WHERE drink = :drink";
    $stmt_2 = $db->prepare($sql_2);
    $stmt_2->execute([':drink_count' => $new_count, ':drink' => $drink]);
    header("Location: /php/mok/overview.php");
    exit;
    die;
?>