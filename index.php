<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="backend/login.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-md-4"></div>
		<div class="col-md-4 frame">
			<section class="login" id="login">
	        	 <form method="post" action="#" role="login">
	         		<input type="text" name="username" id="username" placeholder="Username"/>
	         		<div id="error1"></div><br>
	         		<input type="password" name="password" id="password" placeholder="Password"/>
	         		<div id="error2"></div><br>
	         		<input type="button" style="width:220px" name="submit" id="submit" value="Sign in" class="btn btn-primary"/><br>
	         		<div class="lineword" style="font-size:13px;">
	         	       <a href="register.php">Create account</a> or <a href="forgetPwd.php">Forget password</a>
	         	    </div>
	         	</form>    
			</section>
		</div>
	    <div class="col-md-4"></div>
	</div>
</div>
</body>
</html>