<?php include "../include/header.php"; ?>
<?php include "../include/navbar.php"; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Error page</h1>
<form method="post" action="send_probleem.php">
    <input type="text" name="name" placeholder="name">
    <br>
    <br>
    <input type="text" name="page" placeholder="page">
    <br>
    <br>
    <a>description</a>
    <br>
    <textarea name="description" placeholder="description" rows="10" cols="65"></textarea>
    <br>
    <br>
    <a>priority</a>
    <br>
    <input id = "priority" onchange="" type="range" name="priority" placeholder="priority" min="0" max="10">
    <label id= "priority-vel" for="prio">5</label>
    <br>
    <br>
    <input type="submit" name="submit" value="submit">



    <script type="text/javascript" src="/js/probleem.js"></script>
<script type="text/javascript" src="/js/button-nav-projects.js"></script>
<?php include "../include/footer.php"; ?>