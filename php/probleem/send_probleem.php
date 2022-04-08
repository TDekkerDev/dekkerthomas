<?php include "../include/header.php"; ?>
<?php include "../include/connectdb.php"; ?>
<?php include "../include/navbar.php"; ?>
<?php
    $name = $_POST['name'];
    $page = $_POST['page'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    echo $name . " " . $page . " " . $description . " " . $priority;

    $sql = "INSERT INTO `probleem` (`name`, `page`, `description`, `priority`) VALUES (:name, :page, :description, :priority)";
    $stmt = $db->prepare($sql);
    $stmt->execute(['name' => $name, 'page' => $page, 'description' => $description , 'priority' => $priority]);
    echo "<br><br><br><br><br><br><br><br><br><br>";
    echo "Thank you for reporting";
?>
<?php include "../include/footer.php"; ?>