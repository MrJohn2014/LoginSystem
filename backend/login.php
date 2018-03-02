<?php
      include_once 'dbconnect.php';
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $pwd = mysqli_real_escape_string($conn,$_POST['password']);
      $query = "SELECT * FROM users WHERE userid = '$username'";
      $result = mysqli_query($conn,$query);
      $check = mysqli_num_rows($result);

      if($check==1){
         //fetch the hash password from the database
         $row = mysqli_fetch_assoc($result);
         
         if(!password_verify($pwd,$row['pwd'])){
         	echo "Wrong password";
         }
         else{
         	$_SESSION['username'] = $username;
         	echo 1;
         }
      }
      else{
      	echo "Unvalid username";
      }

?>