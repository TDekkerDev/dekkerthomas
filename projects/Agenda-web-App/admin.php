<?php include "php/header.php"; ?>
<?php include "php/navbar.php"; ?>
    <script language="JavaScript">
        <!--hide
        var password;
        var pass1="ROOT";
        password=prompt("Enter your password","");
        if (password==pass1)
        {
            alert("Access Granted");
        }
        else
        {
            alert("Access Denied");
            location.reload();
        }
        -->
    </script>
    <h1>Admin</h1>
    <h2>alle afspraken</h2>
<?php include "php/databaseget.php"; ?>
<?php include "php/footer.php"; ?>