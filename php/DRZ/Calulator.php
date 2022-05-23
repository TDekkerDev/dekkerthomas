<?php
$checkbox = "off";
$number1 = $_POST['price'];
$checkbox = $_POST['checkbox'];
$Submit = $_POST['Submit'];
echo $number1;
if ($checkbox == "on") {
    $number2 = $number1 / "100";
    $number4 = $number2 * "115";
    $number3 = $number4 + "150" ;
}else{
    $number2 = $number1 / "100";
    $number3 = $number2 * "115";
}
echo "<br>";
echo $number3;
?>
    <form id="ff" method="post" action="DRZ_Calulator.php">
        <input type="hidden" name="number3" value="<?php echo $number3; ?>">
        <input type="hidden" name="number1" value="<?php echo $number1; ?>">
    </form>
<script type="text/javascript">
function formAutoSubmit () {
var frm = document.getElementById("ff");
frm.submit();
}
window.onload = formAutoSubmit;
</script>
