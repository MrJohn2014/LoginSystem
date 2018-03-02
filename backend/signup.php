<?php

  if(isset($_POST['submit'])){
     include_once 'dbconnect.php';

     $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
     $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $username = mysqli_real_escape_string($conn,$_POST['username']);
     $password = mysqli_real_escape_string($conn,$_POST['password']);

     //check whether input is empty
     if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
        header("Location: ../register.php?signup=empty");
        //echo "<div class="alert alert-warning"><stong>Empty!</strong></div>";
        exit();
     }
     else{
          //check whether firstname and lastname is valid 
         if(!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname)){
  			   header("Location: ../register.php?signup=invalid");
  			   exit();
         }
         else{
           //check whether email is valid
           if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location:../register.php?signup=invalidemail");
            exit();
           }
           else{
              //check whether username has been taken
              $query = "SELECT * from users WHERE userid='$username'";
              $result = mysqli_query($conn,$query);
              $check = mysqli_num_rows($result);
              if($check > 0)
              {
                header("Location:../register.php?signup=undertaken");
                exit();
              }
              else{
                  //hash the password
                  $hashpwd = password_hash($password, PASSWORD_DEFAULT);

                  //Insert user information into database
                  $sql = "INSERT INTO users (firstName,lastName,email,userid,pwd) VALUES ('$firstname','$lastname','$email','$username','$hashpwd')";
                  mysqli_query($conn,$sql);
                  header("Location:../index.php");
                  //register.php?signup=success
                  exit();
              }
           }
         }

     }

  }
 else{
    header("Location: ../register.php");
    exit();
  }

?>