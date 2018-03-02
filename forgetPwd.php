<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-md-4"></div>
		<div class="col-md-4 frame">
			<section class="login">
	        	 <form style="margin-top:-10px" method="post" action="reset.php" role="login">
	        	 	<label>Username:</label>
	         		<input type="text" name="uname"/><br>
	         		<p>Press the button and the validation code will send to your registered email</p>
	         		<button type="submit" style="width:220px" name="submit" class="btn btn-primary">Next Step</button><br><br>
	         	</form>    
			</section>

		</div>
	    <div class="col-md-4"></div>
	</div>
</div>
</body>
</html>