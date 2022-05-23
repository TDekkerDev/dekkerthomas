<?php include "../include/header.php"; ?>
<?php include "../include/navbar.php"; ?>
<?php
$number1 = $_POST['number1'];
$number3 = $_POST['number3'];
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="DRZ_MainMain">
    <div class="DRZ_Main">
        <form method="POST" action="Calulator.php">
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="number" class="form-control" name="price" id="Price" placeholder="Price" value="<?php echo $number1 ?>">
            </div>
            <br>
            <div class="form-check">
                <input type="checkbox" name="checkbox" class="form-check-input" id="up150">
                <label class="form-check-label" for="up150">€150+</label>
            </div>
            <br>
            <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        </form>
        <br>
        <br>
        <h3>prijs:<?php echo $number3 ?></h3>
    </div>
</div>

<?php include "../include/footer.php"; ?>