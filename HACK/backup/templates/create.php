<?php
include "../includes/header.php";
include "../connect/connectdb.php";




function generateRandomString($length = 25)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;


}
$naam=$_POST['naam'];
$email=$_POST['email'];
$randomString=generateRandomString($length =25);


// the message
$msg = "$randomString <a href='https://hcp164831.hcproject.nl/templates/show.php?id=$randomString'>Klik hier</a>
";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("$email","U Random token",$msg);

$sql = "INSERT INTO email (naam,email, randomString) VALUES (:naam, :email,:randomString)";
$stmt = $db->prepare($sql);
$stmt->execute(['naam' => $naam,'email'=> $email,'randomString'=>$randomString]);


include "../includes/footer.php";
?>