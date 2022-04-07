<?php include "include/header.php"; ?>
<?php include "include/connectdb.php"; ?>
<?php include "include/navbar.php"; ?>
<div class="project-main">
    <?php
    $sql = "SELECT * FROM `projects`"; 
    $sth = $db->prepare($sql); 
    $sth->execute();
    while($row = $sth->fetch()) : 
    ?>
        <div class="project">
            <div class="project-title"><?php echo $row["Naam"] . "<br>";?> </div>
            <div class="project-time"><?php echo $row["TimeDate"] . "<br>";?> </div>
            <div class="project-description"><?php echo $row["Description"] . "<br>";?> </div>
            <div class ="project-img-box"> 
                <img class = "project-image" src="/media/ImgProjects/<?php echo $row["ImgLocation"]?>" alt="project foto">
            </div>
            <form class = "project-button-container" method="get" action="/projects/<?php echo $row["ProjectsLocation"]?>">
                <button class="btn btn-info project-button" type="submit">Naar project</button>
            </form>
        </div>
    <?php endwhile; ?>
</div>


<script type="text/javascript" src="/js/button-nav-projects.js"></script>
<?php include "include/footer.php"; ?>