<?php
  include_once 'backend/dbconnect.php';
  $user = $_SESSION['username'];
  if(isset($_POST['submit'])){
    session_destroy();
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<p style="font-size:20pt; color:white;">Hello, <?php echo $user; ?>! You signed in successfully!</p><br>
<button style="width:100px" name="submit" id="submit" class="btn btn-primary" onclick="returnHome()">Sign out</button>
<script>
	function returnHome(){
       window.location = "index.php";
	}
</script>
</body>
</html>