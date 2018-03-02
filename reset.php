<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

   
  if(isset($_POST['submit'])){
    include_once 'backend/dbconnect.php';
    //session_start();
    $username = mysqli_real_escape_string($conn,$_POST['uname']);
    $query = "SELECT email from users WHERE userid = '$username'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];

    $mail = new PHPMailer;
    //global $validationCode;
    $_SESSION['validationCode'] = rand(1000,10000);
    $code = $_SESSION['validationCode'];
    $_SESSION['userid'] = $username;
    try{
    	  $mail->isSMTP();
    	  $mail->Host = 'smtp.gmail.com';
    	  $mail->SMTPAuth = true;
        $mail->Username = '';
        $mail->Password = '';

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom("");
        $mail->addAddress("$email");


        $mail->isHTML(true);
        $mail->Subject = "Test email";
        $mail->Body = "<h1>Your validation code is: $code</h1>";
        $mail->send();
        
        echo 'Message has been sent';
    }      
       catch(Exception $e){
         echo 'Message could not be sent. Mailer Error:', $mail->ErrorInfo;
       }     
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="backend/reset.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
	    <div class="col-md-4"></div>
		<div class="col-md-4 frame">
			<section class="login" id="reset">
	        	 <form style="margin-top:-65px" method="post" action="#" role="login">
	        	 	<label>Validation Code:</label>
	         		<input type="text" name="code" id="code"/>
              <div id="error1"></div><br>
	         		<label>New Password:</label>
	         		<input type="password" name="newPwd" id="newPwd"/>
              <div id="error2"></div><br>
	         		<label>Verify password:</label>
	         		<input type="password" name="verify" id="verify"/>
              <div id="error3"></div><br>
	         		<input type="button" style="width:220px" name="submit" id="submit" class="btn btn-primary" value="Change Password"/><br><br>
	         	</form>    
			</section>

		</div>
	    <div class="col-md-4"></div>
	</div>
</div>
</body>
</html>

