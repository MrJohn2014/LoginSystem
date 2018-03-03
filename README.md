# LoginSystem
- Web login system is created with PHP, Javascript, MySQL and PHPMailer
- Apply jQuery, AJAX and Bootstrap
- XAMPP 7.2.0 (Apache web server and MySQL Database)

## index page
<img width="440" height= "300" alt="index_page" src="https://user-images.githubusercontent.com/31462632/36927785-050cc672-1e4e-11e8-94aa-063b70e2c3f9.png">

## index error page
<img width="440" height= "300" alt="index_errorpage" src="https://user-images.githubusercontent.com/31462632/36928262-7cbb1080-1e52-11e8-9650-22d53bcd8403.png">

## register page
<img width="440" height= "300" alt="signup_page" src="https://user-images.githubusercontent.com/31462632/36928147-37b23c8a-1e51-11e8-9598-8ed7aa708bcf.png">

## register error page
<img width="440" height= "300" alt="signup_errorpage" src="https://user-images.githubusercontent.com/31462632/36929043-c4c401aa-1e59-11e8-9992-501f164f576f.png">

## forget password page
<img width="440" height = "300" alt="forget_pwd" src="https://user-images.githubusercontent.com/31462632/36929088-55dccb4a-1e5a-11e8-9bd1-05b7fa5b59df.png"><br><br>
If the user forgets his password, he will need to enter their registered username. And then a validation code will send to user's email. User uses validation code to reset their password.

## validation code example screenshot(check user email)
<img width="800" height="170" alt="validation_code" src="https://user-images.githubusercontent.com/31462632/36929413-361f64bc-1e5e-11e8-8ff9-3de6cbe98a0c.png">

## reset password page
<img width="440" height = "300" alt="reset" src="https://user-images.githubusercontent.com/31462632/36929213-b196f0a4-1e5b-11e8-99c1-1ecf9a14e5e3.png">

## reset error page
<img width="440" height = "300" alt="reset_errorpage" src="https://user-images.githubusercontent.com/31462632/36929506-62ea6dd8-1e5f-11e8-8ea7-fa8d612229f6.png">

## sign in page
<img width="440" height = "300" alt="login_success" src="https://user-images.githubusercontent.com/31462632/36929555-331ee18c-1e60-11e8-8ccb-2874a1a79442.png">

## database view
<img width="800" height= "300" alt="database" src="https://user-images.githubusercontent.com/31462632/36938751-3baec6b6-1ef4-11e8-8e0d-d5689a718833.png"><br>

# Instructions to run
- Download and Set Up XAMPP(make sure the Apache Web Server and MySQL Database running)
- Go to the website localhost/phpmyadmin, create a MySQL database named loginapp and create table named users with 6 columns.
  The 6 columns are named with id, firstName, lastName, email, userid, pwd separately.
- Register a new user in this LoginSystem, then user can sign in successfully.
- If the user forget their password, the LoginSystem will apply PHPMailer to send user a email with validation code to let       them reset their password. So as to do that, you need to add some codes in the reset.php file.<br>
  In the line 28 $mail->Username = ''; add a gmail address into ''<br>
  In the line 29 $mail->Password = ''; add the password of gmail into ''<br>
 In the line 34 $mail->setFrom(""); add the same gmail address into ""
  
