<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css"> 
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-md-4"></div>
		<div class="col-md-4 frame">
			<section class="login" id="login">
	        	<form action="backend/signup.php" method="POST" role="signup" onsubmit="return checkInput()">
	        	 	<input style="margin-top:-75px" type="text" id="fn" name="firstname" placeholder="Firstname"/>
	        	 	<div id="error1"></div><br>
	        	 	<input type="text" id="ln" name="lastname" placeholder="Lastname"/>
	        	 	<div id="error2"></div><br>
	        	 	<input type="text" id="email" name="email" placeholder="Email"/>
	        	 	<div id="error3"></div><br>
	         		<input type="text" id="uname" name="username" placeholder="Username"/>
	         		<div id="error4"></div><br>
	         		<input type="password" id="password" name="password" placeholder="Password"/>
	         		<div id="error5"></div><br>
	         		<button type="submit" name="submit" class="btn btn-primary">Sign up</button>
	         	</form> 	
			</section>
		</div>
	    <div class="col-md-4"></div>
	</div>
</div>
<script type="text/javascript" src="backend/register.js"></script>
</body>
</html>