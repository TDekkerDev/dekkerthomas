<?php include "../include/header.php"; ?>
<?php include "../include/connectdb.php"; ?>
<?php include "../include/navbar.php"; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    $sql = "SELECT * FROM `probleem` ORDER BY `probleem`.`priority` DESC"; 
    $sth = $db->prepare($sql); 
    $sth->execute();
    while($row = $sth->fetch()) : 
    ?>
        <div class="probleem shadow-diffuse">
            <div class="probleem-title"><?php echo $row["priority"] . "<br>";?> </div>
            <div class="probleem-title"><?php echo $row["time-date"] . "<br>";?> </div>
            <div class="probleem-title"><?php echo $row["name"] . "<br>";?> </div>
            <div class="probleem-time"><?php echo $row["page"] . "<br>";?> </div>
            <div class="probleem-description"><?php echo $row["description"] . "<br>";?> </div>
            <form method="post" action="probleem-del.php">
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                <input type="submit" name="delete" value="delete">
            </form>
            <br>
            <br>
            <br>
        </div>
    <?php endwhile; ?>







<?php include "../include/footer.php"; ?>