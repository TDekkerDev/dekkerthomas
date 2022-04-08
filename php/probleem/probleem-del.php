<?php include "../include/connectdb.php"; ?>
<?php
    $id = $_POST['id'];
    $sql = "DELETE FROM `probleem` WHERE id = :id";
    $sth = $db->prepare($sql);
    $sth->execute([':id' => $id]);

    header("Location: show_probleem.php");
    


?>