<?php

 //session_start();
include_once 'dbconnect.php';
$code = mysqli_real_escape_string($conn,$_POST['code']);
$newPwd = mysqli_real_escape_string($conn,$_POST['newPwd']);
$verify = mysqli_real_escape_string($conn,$_POST['verify']);

if($code != $_SESSION['validationCode']){
   echo "Unvalid code";
}
else{
	if($newPwd != $verify){
      echo "Password not match";
	}
	else{
		$hashpwd = password_hash($newPwd,PASSWORD_DEFAULT);
		$username = $_SESSION['userid'];
		$query = "UPDATE users SET pwd = '$hashpwd' WHERE userid = '$username'";
		mysqli_query($conn,$query);
        echo 1;
	}
}

 //echo $code;

?>
