<?php 
session_start(); 
include "../includes/connectdb_i.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: log_in_user.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: log_in_user.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['login_user'] = true;
            	header("Location: show_berichten_user.php");
		        exit();
            }else{
				header("Location: log_in_user.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: log_in_user.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location:log_in_user.php");
	exit();
}